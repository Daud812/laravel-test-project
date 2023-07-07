<html>
   <head>
      <title>Ajax Example</title>
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>
      
         <script>
            function toggleMessage() {
                var button = $("#toggleButton");

                if (button.text() === "Replace Message") {
                    // Make AJAX request to get the updated message
                    $.ajax({
                        type: 'POST',
                        url: '/getmsg',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(data) {
                            $("#msg").text(data.msg);
                            button.text("Show Original Message");
                        }
                    });
                } else {
                    // Revert to the original message
                    $("#msg").text("This message will be replaced using Ajax. Click the button to replace the message.");
                    button.text("Replace Message");
                }
            }
      </script>
   </head>
   
   <body>
    <div id="msg">This message will be replaced using Ajax. Click the button to replace the message.</div>
    <button id="toggleButton" onclick="toggleMessage()">Replace Message</button>
    {{-- <button onclick="getMessage()">Replace Message</button> --}}
    

   </body>

</html>