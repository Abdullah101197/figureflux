<form>
    <div class="form-group">
        <label for="exampleFormControlInput1">plan name:</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Plan Name"
            wire:model="plan_name">
        @error('title')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Price:</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Price "
            wire:model="price">
        @error('title')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Package Duration:</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter package_duration "
            wire:model="package_duration">
        @error('title')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Package features:</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter features "
            wire:model="features">
        @error('title')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">

        <label for="exampleFormControlInput1">Currency:</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter currency_id "
            wire:model="currency_id">
        @error('title')
            <span class="text-danger">{{ $message }}</span>
        @enderror



    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2">Description:</label>
        <textarea type="text" class="form-control" id="exampleFormControlInput2" wire:model="Description"
            placeholder="Enter Description"></textarea>
        @error('body')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <button wire:click.prevent="store()" class="btn btn-success">Save</button>
</form>
