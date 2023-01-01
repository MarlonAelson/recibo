<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
	<div class="container">
		<div class="card">
            <div class="card-header">
                <label for="" class="form-label"><strong>Gerador de Comprovantes de Pagamentos e Recebimentos (Recibos)</strong></label>
            </div>

			<form action="src/generate.php" method="post">
				<div class="card-body">

					<div class="row">

						<div class="col-9">
							<label for="name" class="form-label">Nome
							</label>
							<input type="text" class="form-control" name="name" id="name" required>
						</div>

						<div class="col-3">
							<label class="form-label">Tipo de Comprovante:</label>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="receipt_type" value="payment" id="receipt_type_1">
								<label class="form-check-label" for="receipt_type_1">
								Pagamento
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="receipt_type" value="receipt" id="receipt_type_2" checked>
								<label class="form-check-label" for="receipt_type_2">
								Recebimento
								</label>
							</div>
						</div>

					</div>

					<div class="row">

						<div class="col">
							<label class="form-label">Pagamento/Recebimento:</label>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="receipt_payment_type" value="payment" id="receipt_payment_type_total" checked>
								<label class="form-check-label" for="receipt_payment_type_total">
								Total
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="receipt_payment_type" value="receipt" id="receipt_payment_type_parcial">
								<label class="form-check-label" for="receipt_payment_type_parcial">
								Parcial
								</label>
							</div>
						</div>

						<div class="col">
							<label for="amount" class="form-label">Valor Total do Documento
							</label>
							<input type="text" class="form-control" name="amount" id="amount" disabled>
						</div>

						<div class="col">
							<label for="amount" class="form-label">Valor de Pagamento/Recebimento
							</label>
							<input type="text" class="form-control" name="amount" id="amount" onkeypress="return onlynumber();" required>
						</div>

						<div class="col">
							<label for="payment_form" class="form-label">Forma de Pagamento/Recebimento
							</label>
							<input type="text" class="form-control" name="payment_form" id="payment_form" required>
						</div>

					</div>

					<div class="row">

						<div class="col-6">
							<label for="description" class="form-label">Referente</label>
							<textarea class="form-control" name="description" id="description" rows="3" required></textarea>
						</div>

						<div class="col-6">
							<div class="form-group">
								<input type="checkbox" class="form-check-input" id="exampleCheck1">
								<label class="form-label" for="exampleCheck1">Informar Município/UF Manualmente</label>
							</div>
						
							<input type="text" class="form-control" name="amount" id="amount" disabled>
						</div>
						
					</div>
				
				</div>
				
				<div class="card-footer">

					<button type="submit" class="btn btn-outline-success">Gerar</button>
					<button type="reset" class="btn btn-outline-secondary">Limpar</button>
				</div>

			</form>
	</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
	<script src="src/js/script.js"></script>
</body>
</html>