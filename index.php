<?php
if(isset($_POST['submit'])){
  //  print_r($_POST);    die();
    $url = $_POST['url'];
    $tag = $_POST['tag'];
    
    require_once 'Parser.php';
    $parser = new Parser();
    $res = $parser->process($url, $tag);
   // var_dump($res);
}
?>

<h1>Парсер тегів по html сторінках </h1>
<form name="parser_form" method="POST">
    <label>Введіть адресу сторінки</label><br></br>
    <input type="url" name="url" value="<?php echo (!empty($url))?$url:'Введіть адрес сайту тіпа http://';?>"><br></br>
    <label>Ведіть назву тегу</label><br></br>
    <input type="text" name="tag" value= "<?php echo (!empty($tag))?$tag:'Введіть тег тіпа h1';?>"><br></br>
    <input type="submit" name="submit"value="відправити">
</form>
<?php print_r($res);?>