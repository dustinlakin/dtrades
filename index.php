<!doctype html>
<html>
    <head>
        <title></title>
        <link href='http://fonts.googleapis.com/css?family=Lobster&v2' rel='stylesheet' type='text/css'>
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
        <style>
            /* RESET */
            html, body, div, span, h1, h2, h3, h4, h5, h6, p, blockquote, a,
            font, img, dl, dt, dd, ol, ul, li, legend, table, tbody, tr, th, td 
            {margin:0px;padding:0px;border:0;outline:0;font-weight:inherit;font-style:inherit;font-size:100%;font-family:inherit;list-style:none;}
            a img {border: none;}
            ol li {list-style: decimal outside;}
            fieldset {border:0;padding:0;}

            body { font-family: sans-serif; font-size: 1em; }

            div#container { width: 780px; margin: 0 auto; padding: 1em 0;  }
            p { margin: 1em 0; max-width: 700px; }
            h1 + p { margin-top: 0; }

            h1, h2 { font-family: Georgia, Times, serif; }
            h1 { font-size: 2em; margin-bottom: .75em; }
            h2 { font-size: 1.5em; margin: 2.5em 0 .5em; border-bottom: 1px solid #999; padding-bottom: 5px; }
            h3 { font-weight: bold; }

            ul li { list-style: disc; margin-left: 1em; }
            ol li { margin-left: 1.25em; }

            div.side-by-side { width: 100%; margin-bottom: 1em; }
            div.side-by-side > div { float: left; width: 50%; }
            div.side-by-side > div > em { margin-bottom: 10px; display: block; }

            a { color: orange; text-decoration: underline; }

            .faqs em { display: block; }

            .clearfix:after {
              content: "\0020";
              display: block;
              height: 0;
              clear: both;
              overflow: hidden;
              visibility: hidden;
            }

            footer {
              margin-top: 2em;
              border-top: 1px solid #666;
              padding-top: 5px;
            }
      </style>
      <link rel="stylesheet" href="css/chosen.css" />
    </head>
    <body>
        <header>
            <div class="title">diablotrad.es</div><div class="name">Lakk</div>
        </header>
        <section id="item">
            <div class="sectionTitle">Select Quality</div>
            <section id="quality">
                <div id="White" class="qualHolder">
                    <div class="qualLetter">N</div>
                </div>
                <div id="Blue" class="qualHolder">
                    <div class="qualLetter">M</div>
                </div>
                <div id="Yellow" class="qualHolder">
                    <div class="qualLetter">R</div>
                </div>
                <div id="Green" class="qualHolder">
                    <div class="qualLetter">S
                    </div>
                </div>
                <div id="Gold" class="qualHolder">
                    <div class="qualLetter">U</div>
                </div>
                <div id="Orange" class="qualHolder">
                    <div class="qualLetter">C</div>
                </div>
                <div id="Gray" class="qualHolder">
                    <div class="qualLetter">W</div>
                </div>
            </section>
            <br style="clear:both;"/><br style="clear:both;"/>
                <select id="itemSelect" title="Choose an item type..." style="width:335px;" class="chzn-select">
                    <option value=""></option>
                    <option value="1">test1</option>
                    <option value="2">test2</option>
                    <option value="3">test3</option>
                </select>
            <br/>
        </section>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
        <script type="text/javascript" src="js/chosen.jquery.min.js" ></script>
        <script type="text/javascript" src="js/main.js"></script>
        <script type="text/javascript">
            var info;
        </script>
    </body>
</html>