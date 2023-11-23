<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post">
        @csrf
        <div>
            <label for="tablename">table name</label>
            <input type="text" name="tablename">
        </div>
        <div id="my-reapeter">
            <div class="repeater-row">
                <label for="attributes[0][name]">column name</label>
                <input type="text" name="attributes[0][name]">
                <label for="attributes[0][type]">datatype</label>
                <select name="attributes[0][type]" id="types">
                    <option value="string">String</option>
                    <option value="integer">Integer</option>
                    <option value="boolean">Boolean</option>
                    <option value="text">Text</option>
                </select>
                <label for="attributes[0][config]">config</label>
                <label for="attributes[0][config][nullable]">Nullable</label>
                <input name="attributes[0][config][nullable]" type="checkbox" value="true">
            </div>
            <!-- elements repeater -->

        </div>
        <button id="btn-repeater" type="button">repeater</button>
        <button>build</button>
    </form>

    <script>
        let my_repater = document.querySelector('#my-reapeter');
        let btn_repater = document.querySelector('#btn-repeater');


        btn_repater.addEventListener('click' , function(){
            createRepeater();
        });

        function createRepeater(){
            var index   = getRepeaters();
            var element = document.createElement('div');
            element.classList.add('repeater-row');
            element.innerHTML = `<label for="names-${index}">column name</label>
                <input type="text" name="attributes[${index}][name]" id="names-${index}">
                <label for="types-${index}">datatype</label>
                <select name="attributes[${index}][type]" id="types-${index}">
                    <option value="string">String</option>
                    <option value="integer">Integer</option>
                    <option value="boolean">Boolean</option>
                    <option value="text">Text</option>
                </select>
                <label for="configs-${index}"">config</label>
                <label for="attributes[${index}][config][nullable]">Nullable</label>
                <input name="attributes[${index}][config][nullable]" type="checkbox" value="true" id="configs-${index}">`;
            my_repater.appendChild(element);
        }

        function getRepeaters(){
            var reapeters = document.querySelectorAll('.repeater-row');
            // console.dir(reapeters);
            return reapeters.length;
        }
    </script>
</body>
</html>
