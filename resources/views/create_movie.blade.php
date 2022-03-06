<x-app-layout>

<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container mt-8">
                    <form method="POST" action="/films" enctype="multipart/form-data" class="row g-3">
                    @csrf
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Titre</label>
                            <input type="text"  class="form-control" id="inputEmail4" name="title" required="required">
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Image</label>
                            <input type="file"  class="form-control" id="inputEmail4" name="image" required="required">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Résumé du film</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" required="required"></textarea>
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Date d'affichage</label>
                            <input type="date" class="form-control" id="inputAddress" placeholder="1234 Main St" name="display_date" required="required">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress2" class="form-label">Date de fin d'affichage</label>
                            <input type="date" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name="end_display_date" required="required">
                        </div>
                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">Durée du film(minutes)</label>
                            <input type="number" dusk="@duration" class="form-control" id="inputCity" name="duration" required="required">
                        </div>
                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">Année de production</label>
                            <input type="number" class="form-control" id="inputCity" name="production_date" required="required">
                        </div>
                        <div class="col-md-2">
                            <label for="inputZip" class="form-label">prix</label>
                            <input type="number" class="form-control" id="inputZip" name="price" required="required">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</x-app-layout>
