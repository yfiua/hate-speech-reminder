admin-configure page

<form action="admin-config" method="POST">
    {!! csrf_field() !!}
    <input type="checkbox" name="about_ethnicity" value="1">about ethnicity<br>
    <input type="checkbox" name="about_nationality" value="1">about nationality<br>
    <input type="checkbox" name="about_religion" value="1">about religion<br>
    <input type="checkbox" name="about_gender" value="1">about gender<br>
    <input type="checkbox" name="about_sexual_orientation" value="1">about sexual orientation<br>
    <input type="checkbox" name="about_disability" value="1">about disability<br>
    <input type="checkbox" name="about_class" value="1">about class<br>
    <input type="checkbox" name="archaic" value="1">archaic<br>
    Offensiveness threshold: <input type="text" name="threshold"><br>
    <input type="submit" value="Submit">
</form>
