<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>home</title>
</head>
<style>
  nav{
    background-color: gray;
  }

  ul{
    display: flex;
  }

  ul li {
	list-style-type: none;
  padding: 2rem 1rem 2rem 0;
  }

  ul li a{
    color: black;
    text-decoration: none;
  }
</style>
<body>
  <nav>
    <ul>
      @foreach ($links as $link)
      <li>
        <a href="{{ route($link['source']) }}">{{ $link['text'] }}</a>
      </li>
      @endforeach
    </ul>
  </nav>
  <h1>HOME</h1>
</body>
</html>
