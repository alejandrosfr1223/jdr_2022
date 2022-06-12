<div class="card-body m-4">
    <div class="row">
        <div class="col-sm-12 col-md-10 mb-3">
            <div class="row">
                <div class="col-sm-12 col-md-6 mb-0">
                    <div class="form-group">
                        <label for="perkname">Título del Perk</label>
                        <input
                            type="text"
                            class="form-control"
                            name="perkname"
                            placeholder="Introduzca el nombre del perk"
                            value="{{ old('titulo', $perk->perkname) }}"
                        >
                    </div>
                    @error('perkname')
                        <div class="col-span-12 sm:col-span-12">
                            <small style="color:red">*{{ $message }}*</small>
                        </div>
                    @enderror
                </div>
                <div class="col-sm-12 col-md-6 mb-0">
                    <div class="form-group">
                        <label for="price">Monto (en Dólares Estadounidenses)</label>
                        <input
                            type="text"
                            class="form-control"
                            name="price"
                            placeholder="Introduzca el monto del Perk"
                            value="{{ old('price', $perk->price) }}"
                        >
                    </div>
                    @error('price')
                        <div class="col-span-12 sm:col-span-12">
                            <small style="color:red">*{{ $message }}*</small>
                        </div>
                    @enderror
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 mb-3">
            <div class="form-group">
                <label for="description">Descripción</label>
                <textarea class="form-control" name="description" rows="3" placeholder="Escriba comentarios acerca del Perk">{{ old('description', $perk->description) }}</textarea>
            </div>
            @error('description')
                <div class="col-span-12 sm:col-span-12">
                    <small style="color:red">*{{ $message }}*</small>
                </div>
            @enderror
        </div>
    </div>
</div>
