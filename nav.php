<div id="banner">
<h1>Gallery</h1>
<div id="navigation">

    <?php
    $menu = array(
    'home'  => array('text'=>'Home',  'url'=>'index.php'),
);

class CNavigation {
    public static function GenerateMenu($items) {
    $html = "<nav>\n";
    foreach($items as $item) {
        $html .= "<a class='navlink' href={$item['url']}>{$item['text']}</a>\n";
    }
    $html .= "</nav>\n";
    return $html;
  }
};

echo CNavigation::GenerateMenu($menu);

?>
</div>
</div>
