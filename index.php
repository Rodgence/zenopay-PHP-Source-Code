<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kulipia Huduma ya SMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Kulipia Huduma ya SMS</h2>
        <form id="checkoutForm" action="zeno_checkout.php" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Jina *</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Andika Majina yako Mawili" required>
            </div>
            <div class="mb-3">
                <label for="meter" class="form-label">Namba ya Mita Kuu (TANESCO)</label>
                <input type="text" class="form-control" id="meter" name="meter" placeholder="Andika namba ya mita kubwa ya LUKU TANESCO" required>
            </div>
            <div class="mb-3">
                <label for="submeter" class="form-label">Namba ya Sabmita</label>
                <input type="text" class="form-control" id="submeter" name="submeter" placeholder="Andika namba ya sabmita yako inayoanza na 22000..." required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Namba ya Simu *</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Andika namba ya simu" required>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Taarifa za Makazi *</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="Andika wilaya na mkoa mfano: Ilala, Dar es Salaam" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Kifurushi cha Huduma ya SMS *</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="package" id="package1" value="999" required>
                    <label class="form-check-label" for="package1">
                        Tshs 999/= mwezi 1
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="package" id="package2" value="2499" required>
                    <label class="form-check-label" for="package2">
                        Tshs 2,499/= miezi 3
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="package" id="package3" value="4999" required>
                    <label class="form-check-label" for="package3">
                        Tshs 4,999/= miezi 6
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="package" id="package4" value="9999" required>
                    <label class="form-check-label" for="package4">
                        Tshs 9,999/= mwaka mzima
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary w-100">Proceed to Checkout</button>
        </form>
    </div>
</body>
</html>
