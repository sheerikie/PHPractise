<?php
      
      class Parser
      {
        private $string='{P}asdfghjkl
        {P}{A href=(dfg)}{/P}{/A}
        {IMG src=(wert)}
        <a href="http://www.mydomain.com/page.html" class="myclass" rel="myrel">URL</a>
        <a href="" class="myclass" rel="myrel">URL</a>';  
        
        public function case () {
            $string = trim($this->string);
            $capture=PREG_OFFSET_CAPTURE;
            echo $string;
            //works
            //checks if input is empty or not 
            switch ($string) {
                case (empty($string)):
                    echo "string was left blank.";
                    break;
                  //works  
                  //validates length of string
                case (strlen($string) < 4):
                    echo "string was too short";
                    break;
                    //works
                    //checks if markup has valid syntax
                case (preg_match_all('/{\/?((?!(P|B|CODE|BR|IMG|A|U|I|DEL|INS|HR|A|H1|H2|H3|H4|H5|H6)\b)\w*)\/?}/',$string,$matches,PREG_OFFSET_CAPTURE)? true : false):
                    echo "The string is not a valid mark-up";
                    print json_encode($matches);
                    break;
                //works
                //checks if empty element has a closing tag
                case (preg_match_all('/{\/IMG}|{\/BR}/', $string,$matches,PREG_OFFSET_CAPTURE)? true : false):
                    echo "The element is unknown";
                    print json_encode($matches);
                    break;
                   //works
                //checks if tags have all brackets
                case (preg_match_all('/\{\w+\b(?!})/', $string,$matches,PREG_OFFSET_CAPTURE)? true : false):
                    echo "Check Unclosed Tags";
                    print json_encode($matches);
                    break;
                    //works
                //checks for unclosed tags
                case (preg_match_all('/({\w+(?:\s+\w+=\"[^"]+\")*)(?=[^}]+(?:{|$))/', $string,$matches,PREG_OFFSET_CAPTURE)? true : false):
                    echo "Check Unclosed Tags";
                    print json_encode($matches);
                    $res = preg_replace('/({\w+(?:\s+\w+=\"[^"]+\")*)(?=[^}]+(?:{|$))/', '$1}', $str);
                    break;
                   //works
                //checks if attribute is correct
                case (!preg_match_all('/{A.*(href|HREF)/', $string,$matches,PREG_OFFSET_CAPTURE)? true : false):
                    echo "Wrong Attribute in Anchor";
                    print json_encode($matches);
                    break;
                       //works
                //checks if attribute is correct
                case (!preg_match_all('/{IMG.*(src|SRC|width|height|alt)/', $string,$matches,PREG_OFFSET_CAPTURE)? true : false):
                    echo "Wrong Attribute in Anchor";
                    print json_encode($matches);
                    break;
                    //works
                //checks for href
                //checks if href is known and lowercase
                //checks if href has parenthesis
                case (preg_match_all('{(A (href|HREF)).*}', $string, $matches,PREG_OFFSET_CAPTURE)? true : false):
                    switch ($string) {
                        case (!preg_match_all('/{\s*\w*\s*(href).*?}/', $string, $matches,PREG_OFFSET_CAPTURE)):
                            echo "The A element does not correspond to lower case href/the attribute is unknown";
                            print json_encode($matches);
                        case (!preg_match_all('/(?<=href=\().+(?=\))/', $string, $matches,PREG_OFFSET_CAPTURE)):
                            echo "There is no value in href tag";
                            print json_encode($matches);
                            break;
                        case (preg_match_all("/\((?=)\)/", $string, $matches,PREG_OFFSET_CAPTURE)):
                            echo "Parenthesis are not allowed in Element attribute";
                            print json_encode($matches);
                            break;
                           
                        default:
                           
                    }
                      //works
                //checks for img tag
                //checks if img tag is known and lowercase
                //checks if img tag has parenthesis
                    case (preg_match_all('{(IMG (src|SRC)).*}', $string, $matches,PREG_OFFSET_CAPTURE)? true : false):
                    switch ($string) {
                        case (!preg_match_all('/{\s*\w*\s*(src).*?}/', $string, $matches,PREG_OFFSET_CAPTURE)):
                            echo "The IMG element does not correspond to lower case src/the attribute is unknown";
                            print json_encode($matches);
                        case (!preg_match_all('/(?<=src=\().+(?=\))/', $string, $matches,PREG_OFFSET_CAPTURE)):
                            echo "There is no value in src tag";
                            print json_encode($matches);
                            break;
                        case (preg_match_all("/\((?=)\)/", $string, $matches,PREG_OFFSET_CAPTURE)):
                            echo "Parenthesis are not allowed in Element attribute";
                            print json_encode($matches);
                            break;
                        default:
                            return true;
                    }
                    break;
                default:
                    echo "Your Code is Fine!";
            }
        }
      }
      $regex=new Parser();
      $regex->case();
     
?>