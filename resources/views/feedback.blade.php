<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Feedback</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css"
    integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
<div class="row">
  <div class="col-md-6">
      <div class="card p-4">
        <h1>Feedback</h1>

        @if (session('status'))
        <div class="alert alert-success">
          {{ session('status')}}
        </div>
        @else

    <form class="form" action="feedback" method="POST">

      {{ csrf_field() }}



<div class="form-group">
      <label for="name">Name</label>
      <input class="form-control" type="text" id ="name" required placeholder="Enter your name" name="name">
    </div>

<div class="form-group">
      <label for="email">Email</label>
      <input class="form-control" type="email" id ="email" required placeholder="Enter your email" name="email">
    </div>

<div class="form-group">
      <label for="name">Message</label>
      <textarea name="message" id ="message" required class="form-control" rows="3">
      </textarea>
    </div>

        <button class="btn btn-primary" type="submit">Sends</button>
      </form>
      @endif

</div>
</div>
</div>
</div>
  </body>
</html>
