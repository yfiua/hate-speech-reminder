<!DOCTYPE html>
<html lang="en">
    <h1>Hate Speech Reminder Demo - User Page</h1>
    <form action="post-message" method="POST">
        {!! csrf_field() !!}
        <input name="content"><br/>
        <input type="submit">
    </form>
</html>
