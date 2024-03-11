<h4>Un utente ha richiesto di lavorare con noi</h4>
<h4>Ecco i suoi dati;</h4>
<h4>Nome: {{user->name}}</h4>
<h4>Email: {{user->email}}</h4>
<p>Se vuoi renderlo revisore, clicca qui:</p>

<a href="{{route('make.revisor', compact('user'))}}">Rendi revisore</a>