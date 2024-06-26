<div>
    <form wire:submit="save" class="row g-3">
        <x-input-with-label model="nama" name="nama" label="Nama Program Studi" id="nama" type="text"/>
        <x-input-with-label model="jenjang" name="jenjang" label="Jenjang Program Studi" id="jenjang" type="text" />
        <x-input-with-label model="singkatan" name="singkatan" label="Singkatan" id="singkatan" type="text"/>

        <div class="modal-footer">
            <x-button type="submit" text="Save Post" class="btn btn-primary" />
        </div>
    </form>
</div>
