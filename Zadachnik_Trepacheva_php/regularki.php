<?php
//29.14
echo preg_replace('#a.+?a#', '!', 'aba accca azzza wwwwa'). '<br>';
//30.14
echo preg_replace('#a[a-fj-z]a#', '!', 'a aaza aasmg '). '<br>';
//30.16
echo preg_replace('#a[^ex]a#', '!', 'aba aea aca aza axa a-a a#a'). '<br>';
//30.17
echo preg_replace('#w[а-яё]w#u', '!', 'wйw wяw wёw wqw'). '<br>';
//30.21
echo preg_replace('#[а-яА-ЯёЁ]+#u', '!', 'ааа ззз ййй ААА БББ ЁЁЁ ЗЗЗ ЙЙЙ йа'). '<br>';
echo preg_replace('#\\\\+#', '!', '\\ \\ \\\\'). '<br>'; //выведет '! ! !'
//30.26
echo preg_replace('#\b#', '!', 'xbx aca aea abba adca abea'). '<br>';
//30.28
echo preg_replace('#a\\\\{2}a#', '!', 'a\a a\\a a\\\\a'). '<br>';
echo preg_match('#^[a-zA-Z-.]+@[a-z]+\.[a-z]{2,3}$#', 'my-mail@mail.ru');
echo preg_match_all('#a+#', 'eee aaa aa bbb a',  $matches); //выведет 3
	var_dump($matches);
//31.1
echo preg_replace('#(\w+)@(\w+)#','$2@$1', 'aaa@bbb eee7@kku'). '<br>';    
//31.2
echo preg_replace('#([1-9])#','$1$1', 'a1b2c3'). '<br>';
//31.5
$str = 'myEmail@mail.ru';
	echo preg_match('#^[a-z0-9_.-]+@[a-z_.-]+\.[a-z]{2,}$#', $str).'<br>';
//31.6
echo preg_match_all('#[a-z0-9_.-]+@[a-z_.-]+\.[a-z]{2,}#', 
        'jkj jkk mymail@mail.ru my.mail@mail.ru my-mail@mail.ru', $m);
var_dump($m);
//31.7
echo preg_match('#^[a-z0-9-]+\.([a-z]{2,})$#', 'site.com').'<br>';
//31.8
echo preg_match('#^[a-z0-9-]+\.[a-z0-9-]+\.([a-z]{2,})$#', 'hello.site.ru').'<br>';
//31.10
echo preg_match('#^https?://[a-z0-9-]+\.([a-z]{2,})$#', 'https://site.com').'<br>';
//31.16
preg_match_all('#\d#', 'asf5asg 2asg sahh3', $matches);
var_dump($matches);
echo array_sum($matches[0]).'<br>';

//31.17
echo preg_replace('#^([0-9]{2})-([0-9]{2})-([0-9]{4})$#', '$3.$2.$1', '31-12-2014');
//31.18
echo preg_replace('#(http://site\.ru|http://site\.com)#', '<a href="http://site.ru">site.ru</a>',
        'http://site.ru, jjlhjh hjhjlhl http://site.com jkjyuio');

$str = 'http://site.ru, http://site.com, https://site.info';
	echo preg_replace('#https?://([a-z0-9-]+\.[a-z]{2,})#', '<a href="$0">$1</a>', $str).'<br>';
        
        //32.1
        echo preg_replace('#(?<=b)a{3}#', '!', 'ffa baac baaa').'<br>';
         //32.2
        echo preg_replace('#(?<!b)a{3}#', '!', 'ffa baac bwaaa baaa').'<br>';
           //32.3     
        echo preg_replace('#a{3}(?=b)#', '!', 'ffa baac bwaaa baaab').'<br>';
           //32.4     
        echo preg_replace('#a{3}(?!b)#', '!', 'ffa baac bwaaaw baaab').'<br>';
         //32.5     
        echo preg_replace('#(?<=\s)\*(?=\s)#', '!', 'aaa * bbb ** eee * **').'<br>';
        //32.6     
        echo preg_replace('#(?<!\*)\*\*(?!\*)#', '!', 'aaa * bbb ** eee *** kkk ****').'<br>';
        //32.7     
        echo preg_replace('#([a-z])(?=\1)#', '!',
                'aa aaza * bbzb ** eee *** kkk ****').'<br>';
        //32.9
        echo preg_replace_callback('#\d+#', 'square', '6 5 4 3 2').'<br>';
         function square($num) {
            $result = $num[0]*$num[0];
            return $result;
        }
      //32.10
        echo preg_replace_callback("#(?<=' )\d+ (?=')#", 'power', "2aaa'32'bbb'12'").'<br>';
         function power($num) {
            $result = $num[0]*2;
            return $result;
        }
        
        echo preg_replace('#a.+x#U', '!', 'a23e4x qw x e'); 