<?= $this->extend("layout/header")?>

<?= $this->section("chat")?>

<div class = "container">
    <div id = "getmsg">

    </div>
        <form action= "" method = "POST">
            <div class = "form-group">
            <textarea name = "message" class = "form-control" id="message" cols = "30" rows = "10"></textarea>
            </div>
            <span id= "message_err"></span>
            <div class = "form-group pt">
                <button type = "submit" id = "send" class="btn btn-success"> Send </button>
            </div>
        </form>

        

        <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function() {
                
                setInterval(function() {
                    showmessage();
                },800);
                function showmessage(){
                    $.ajax({
                        type: "GET", 
                        url : '/message',
                        async : true,
                        dataType: 'JSON',
                        success: function(data) {
                            var html = "";
                            for(i = 0; i < data.length; i++) {
                                html += "<div class='container'>" +
                                            data[i].firstname + 
                                                "<p>" + data[i].message + "</p>" +
                                                "<span class='time-right'>" + data[i].created_at + "</span></div>";
                            }
                            $("#getmsg").html(html);
                        }
                    });
                }

                $('#send').on('click', function(e) {
                    e.preventDefault;
                    var _texts = $("#message");
                    $.ajax({
                        type: "POST",
                        url: '/chat',
                        dataType: 'JSON',
                        data: {message: _texts},
                        success: function(data) {
                            console.log('sent');
                            showmessage();
                            $('#message').val("");
                        },
                        error: function(err){
                            $("#message_err").text(err.responseJSON.messages.message);
                            $("#message_err").addClass('text-danger');
                        }

                    }
                    );
                });
            });
        </script>
    </div>

<?= $this->endSection()?>