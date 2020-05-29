<?php

    class Route{
        public static function set($route, $function)
        {

            $r = $_SERVER['REQUEST_URI'];

            $url = explode('/', $route); 
            $uri = explode('/', $_SERVER['REQUEST_URI']);
            $data = [];

            if($url[0] == $_GET['url'])
            {
                $i = 0;
                foreach ($url as $string)
                {   
                    if (strpos($url[$i], '}') > 0)
                    {
                        $r = $uri[$i + 1];
                        $prm = rawurldecode($string);
                        $prm = str_replace('{','',$prm);
                        $prm = str_replace('}','',$prm);
                        $data[trim($prm)] = iconv('tis620','UTF-8', $r);

                    }

                    if($string == $url[0])
                    {
                        $i++;
                    }

                }

                $function->__invoke($data);

            }
            else if ($_GET['url'] == '')
            {
                if($route == '/')
                {
                    $function -> __invoke();
                }
            }
        }

    }

?>