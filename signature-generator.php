<html>
    <head>
        <title>HTML Signature Generator</title>
        <style>
            body {
              font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            }
        </style>
    </head>
    <body>
        <h1>HTML Signature Generator</h1>

        <?php
        if ($handle = opendir('source_images')):
            ?>
            <ol>
            <?php
            while (false !== ($entry = readdir($handle))):
                if(strpos($entry, '.') !== 0):
                    $host = "https://email-assets.s3.amazonaws.com/";
                    $filename = preg_replace('/\\.[^.\\s]{3,4}$/', '', $entry).".html";
                    $file_handle = fopen('signatures/'.$filename, 'w');
                    $data = "<p><img src=\"".$host.$entry."\" /></p><p><span style=\"color: transparent;\">.</span></p>";
                    fwrite($file_handle, $data);
                    echo '<li><a href="signatures/'.$filename.'">signatures/'.$filename.'</a></li>';
                endif;
            endwhile;
            ?>
            </ol>
            <?php
            closedir($handle);

        endif;
        ?>
    </body>
</html>