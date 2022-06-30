<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>People</title>
    <script>
             function getPeople() {
                var Letters = document.getElementById("Letters").value;
                //alert("Letters");
                var url = "api/people.php?Letters="+ Letters;
                var xhr = new XMLHttpRequest();
                xhr.open("GET", url);
                xhr.onload = function() {
                    var text = xhr.responseText;
                    //alert(text);
                    //json's deserealisation
                    var people = JSON.parse(text);
                    //alert(people);
                    //из десериализованного объекта генерируем текст для вывода
                    var out = "";
                    for(var i=0; i < people.length; i++) {
                        var person = people[i];
                        //alert(person);
                        var firstName = person["firstName"];
                        var lastName = person["lastName"];
                        //alert(lastName);
                        out += lastName + "," + firstName + "<br />";
                    }
                    //alert(out);
                    document.getElementById("display").innerHTML = out;
                };
    
            xhr.send();
            }
        </script>

</head>
<body>
    <input type="text" id="Letters" oninput="getPeople();"/>
    <div id="display"></div>
</body>
</html>