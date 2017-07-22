<!DOCTYPE>
<html>
  <head>
    <title>Smart Chat Bot</title>
    <!-- Important to load artyom in the head tag, this give time to load all the voices in the browser -->
    <script type="text/javascript" src="artyom.js"></script>
  </head>
  <body>

    <script>
        artyom.initialize({
          lang: 'pt-PT',
          continuous: true,
          debug: false,
          liste: true
        });

        console.log(artyom.getVoices());
        artyom.say("Ola, tudo bem?");
        artyom.say("Sim, comigo está, e com vo se?");
      </script>
  </body>
</html>
