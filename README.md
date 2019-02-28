# evote-movie-2019-06-style-variables-passed-to-templates

Part of the progressive Movie Voting website project at:
https://github.com/dr-matt-smith/evote-movie-2019

The project has been refactored as follows:


- in `/templates/_header.php` 

    - add an echo shortcut to print out the value of a style variable `$pageName` for EACH link, e.g. for the home page:

        ```php
            <a href="index.php" class="<?= $homePageStyle ?>">Home</a>
        ```

    - at the beginning of this script add to the PHP code block statements to set each link variable to an empty string if is was not found:
    
        ```php
            <?php
            if(empty($pageTitle)){
                $pageTitle = '';
            }

            if(empty($homePageStyle)) $homePageStyle = '';
            if(empty($aboutPageStyle)) $aboutPageStyle = '';
            if(empty($contactPageStyle)) $contactPageStyle = '';
            if(empty($sitemapPageStyle)) $sitemapPageStyle = '';
            if(empty($listPageStyle)) $listPageStyle = '';
          ?>
        ```

- create new folder `/src`

        - for each  function, that sets the corresponding link style variabled to `current_page`:
        
            ```php
                function homeAction()
                {
                    $pageTitle = 'home';
                    $homePageStyle = "current_page";
                    require_once __DIR__ . '/../templates/homepage.php';
                }
            ```
