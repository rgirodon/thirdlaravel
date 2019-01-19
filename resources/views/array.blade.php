<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Les articles</title>
    </head>
        <body>
        <ul>
        	@foreach ($array as $idx)
        	
        		@if (($idx % 2) == 0)
        		
        			<li>{{ $idx }}</li>
        			
        		@endif
        		
        	@endforeach
        </ul>
    </body>
</html>