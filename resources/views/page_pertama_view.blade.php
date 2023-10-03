<div>
    <h1>test</h1>

    <?php 
    foreach($arr as $val)
    {
        echo $val->name.'<br />';
    }
    ?>

    <br />
    <br />
    @foreach($arr as $val)
        {{ $val->name }} <br />
    @endforeach
</div>
