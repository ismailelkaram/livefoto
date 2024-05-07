<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<title>Hello, modularity!</title>
</head>
<body>
<h1>Оформить заявку</h1>


<script async src="https://cdn.jsdelivr.net/npm/es-module-shims@1/dist/es-module-shims.min.js" crossorigin="anonymous"></script>
<script type="importmap">
	{
	  "imports": {
		"@popperjs/core": "https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/esm/popper.min.js",
		"bootstrap": "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.esm.min.js"
	  }
	}
</script>
<script type="module">
	import * as bootstrap from 'bootstrap'

	new bootstrap.Popover(document.getElementById('popoverButton'))
</script>
</body>

<form class="row g-3 needs-validation" novalidate>
	<div class="col-md-4 position-relative">
		<label for="validationTooltip01" class="form-label">Имя Фамилия</label>
		<input type="text" class="form-control" id="validationTooltip01" value="Mark" required>
		<div class="valid-tooltip">
			Хорошо!
		</div>
	</div>
	<div class="col-md-4 position-relative">
		<label for="validationTooltip02" class="form-label">Телефон *</label>
		<input type="number" class="form-control" id="validationTooltip02" value="1234" required>
		<div class="valid-tooltip">
			Хорошо!
		</div>
	</div>

		</div>
	</div>
	<div class="col-md-6 position-relative">
		<label for="validationTooltip03" class="form-label">Ссылка на социальную сеть</label>
		<input type="text" class="form-control" id="validationTooltip03" required>
		<div class="invalid-tooltip">
			социальную сеть
		</div>
	</div>


	<div class="col-md-3 position-relative">
		<label for="validationTooltip05" class="form-label">Город</label>
		<input type="text" class="form-control" id="validationTooltip05" required>
		<div class="invalid-tooltip">
			Пожалуйста, укажите действительный город.
		</div>
	</div>
	<div class="col-md-3 position-relative">
		<label for="validationTooltip05" class="form-label">Какая вакансия Вам интересна?</label>
		<input type="text" class="form-control" id="validationTooltip05" required>
		<div class="invalid-tooltip">

		</div>
	</div>
	<div class="col-12">
		<button class="btn btn-primary" type="submit">Submit form</button>
	</div>

</form>
