<nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <a class="navbar-brand" href="/access/public">{{config('app.name', 'GeneSys')}}</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/access/public">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/access/public/contact">Contacts</a>
          </li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li><a href ="/access/public/posts/create">Create Client</a></li>
		</ul>
      </div>
    </nav>