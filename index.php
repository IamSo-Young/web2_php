<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>가지고 있는 콘솔 게임</title>
  </head>
  <body>
    <!--\<\?php
      echo date('Y-m-d H:i:s');
     ?>-->
     <h1><a href="index.php">콘솔 게임</a></h1>
     <!--<ol>
       <li><a href="index.php?id=MONSTERHUNTER_WORLD">몬스터헌터 월드</a></li>
       <li><a href="index.php?id=THELEGENDOFZELDA_BREATHOFTHEWILD">젤다의 전설 브레스 오브 더 와일드</a></li>
       <li><a href="index.php?id=SUPERMARIO_ODYSSEY">슈퍼 마리오 오딧세이</a></li>
       <li><a href="index.php?id=MARIOKART_8_DELUXE">마리오 카트8 디럭스</a></li>
       <li><a href="index.php?id=DRAGONBALL_FighterZ">드래곤볼 파이터즈</a></li>
       <li><a href="index.php?id=THEWITCHER_WILDHUNT_GOTYEDITION">위쳐 3 와일드 헌트 GOTY 에디션</a></li>
       <li><a href="index.php?id=HORIZONZERODAWN_COMPLETEEDITION">호라이즌 제로 던 컴플리트 에디션</a></li>
       <li><a href="index.php?id=ARMS">암즈</a></li>
     </ol> -->
     <?php
     /*data 디렉토리에 있는 파일의 목록을 가져오세요. PHP님.
     파일의 목록 하나 하나를
     li와 a태그를 이용해서 글목록을 만드세요.*/
     $list = scandir('data');
     $i = 0;
     while($i<count($list))
     {
       if($list[$i] != '.')
       {
         if($list[$i] != '..')
         {
           ?>
           <li><a href="index.php?id=<?=$list[$i]?>"><?=$list[$i]?></a></li>
           <?php
         }
       }
       $i = $i + 1;
     }
      ?>
     <h2>
       <?php
       /*'만약에 id값이 있다면*/
       if(isset($_GET['id']))
       {
         echo $_GET['id'];
       }
       /*없다면*/
        else
        {
         echo "Welcome";
        }
       ?>
     </h2>
     <?php
     if(isset($_GET['id']))
     {
       /*echo data/id 값에 해당하는 파일의 내용;*/
       echo file_get_contents("data/".$_GET['id']);
     }
     else
      {
        echo "Hello, PHP";
     }
      ?>
  </body>
</html>
