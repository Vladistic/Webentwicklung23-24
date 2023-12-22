
<main class="flex-shrink-0">
    <div class="container mt-4">
        <h2>Spalten erstellen</h2>

        <form>
            <div class="form-group m-2">
                <label for="spaltenbezeichnung">Spaltenbezeichnung</label>
                <input type="text" class="form-control" id="spaltenbezeichnung" placeholder="Bezeichnung für Spalte">
            </div>

            <div class="form-group m-2">
                <label for="spaltenbeschreibung">Spaltenbeschreibung</label>
                <textarea class="form-control" id="spaltenbeschreibung" rows="3" placeholder="Beschreibung für Spalte"></textarea>
            </div>

            <div class="form-group m-2">
                <label for="sortid">Sortid</label>
                <input type="text" class="form-control" id="sortid" placeholder="Sortid angeben">
            </div>

            <div class="form-group m-2">
                <label for="operator">Board auswählen</label>
                <select class="form-control" id="operator">
                    <option>Generelle ToDos</option>
                    <option>Wichtige ToDos</option>
                    <option>Unwichtige ToDos</option>
                </select>
            </div>

            <a href="#" class="btn btn-primary m-2">Speichern</a>
            <a href='https://team18.wi1cm.uni-trier.de/public/' class="btn btn-secondary m-2">Abbrechen</a>
        </form>
    </div>
</main>
