<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Event testing</title>
</head>
<body>
  <h1>Event testing</h1>
  <form>
    @csrf
    <input type="text" name="message" placeholder="example">
    <button type="submit">Push me</button>
  </form>
  <script>

    document.querySelector('form')
      .addEventListener('submit', event => {
      event.preventDefault();

      fetch('/test-event/', {
        method: 'POST',
        body: new FormData(event.target)
      })
        .then(res => res.json()).then(data => {
        console.log(data);
      })
        .catch(e => console.warn(e));
      event.target.elements.message.value = '';

    });

  </script>
</body>
</html>
