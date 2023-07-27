   <?php
   
   include("connect.php");

   $sql = $conn->query("SELECT * FROM news");
   $article = $sql->fetchAll(PDO::FETCH_ASSOC);

   foreach($article as $row => $item) {

    echo "<div class=\"article-container\">";
    echo "<div class=\"" . $item['main_class'] . "\">";
    echo "<a class=\"article-link\" href=\"#\" target=\"_blank\"></a>";
    echo "<div class=\"article-image\">";
    echo "<a></a>";
    echo "<a class=\"btn img-btn " . $item['button_color'] . "\" href=\"#\" target=\"_blank\">" . $item['link_title'] . "</a>";
    echo "<img src=\"" . $item['main_image'] . "\" alt=\"Image for article\">";
    echo "</div>";
    echo "<div class=\"text-block\">";
    echo "<a></a>";
    echo "<div class=\"block-text\">";
    echo "<h3>" . $item['title'] . "</h3>";
    echo "<p>" . $item['info'] . "</p>";
    echo "<a class=\"btn " . $item['button_color'] . "\">Read More</a>";
    echo "</div>";
    echo "<div class=\"user\">";
    echo "<div class=\"avatar\"><img src=\"" . $item['avatar'] . "\" alt=\"Authors avatar.\"></div>";
    echo "<div class=\"details\">";
    echo "<strong>Posted by " . $item['author'] . "</strong>";
    echo "<br>";
    echo $item['date_string'];
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";

   }
                        
   ?>
                        

                                                                    
                                        
                                            
                                            
                                                
                                                
                                                
                                            
                                        
                                    
                                
                            