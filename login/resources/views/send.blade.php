<form method="POST" action="store">
@csrf

    <label for="title">Title</label><br>
        <input type="text" id="title" name="title"><br><br>

    <label for="body">Body</label><br>

        <textarea id="body" name="body" rows="4" cols="50">
        </textarea><br><br>

    <label for="link">Link</label><br>
        <input type="text" id="link" name="link"><br><br>


            <input type="submit" value="Submit">
</form>
