<form method="post" action={{route('toHome')}}>
@csrf
<input type="email" name="email">
<input type="password" name="password">
<button>login</button>
</form>
