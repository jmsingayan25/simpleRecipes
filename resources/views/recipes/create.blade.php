@extends('layouts.app')
@section('title', 'Recipes - Create')
@section('content')

<div class="container-fluid p-5">
    @if(session('danger'))
    <div class="alert alert-danger" role="alert">{{ session('danger') }}</div>
    @endif
    <form class="" action="{{ route('recipes.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h5 class="card-header">
                        Create Recipe
                    </h5>
                    <div class="card-body">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="recipe_name" name="recipe_name" value="{{old('recipe_name')}}">
                            <label for="recipe_name">Recipe Name</label>
                            @error('recipe_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <textarea name="recipe_description" id="recipe_description" class="form-control">{{old('recipe_description')}}</textarea>
                            <label for="recipe_description">Recipe Description</label>
                            @error('recipe_description')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <!-- <div class="mb-3"> -->
                                <label for="recipe_image" class="form-label">Recipe Image</label>
                                <input class="form-control" type="file" id="recipe_image" name="recipe_image" value="{{old('recipe_image')}}">
                                @error('recipe_image')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            <!-- </div> -->
                            </div>
                            <div class="col-md-6">
                                <label for="recipe_image" class="form-label">Difficulty</label>
                                <select name="level" id="level" class="form-control">
                                    <option value="">Select Difficulty</option>
                                    @foreach($levels as $level)
                                        <option value="{{$level->id}}">{{$level->type}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <!-- Ingredients Container -->
                        <div class="card">
                            <div class="card-header">
                                Ingredients 
                            </div>
                            <div class="card-body">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Ingredient 1</span>
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="ingredient_name[]">
                                        <label for="ingredient_name[]">Name</label>
                                    </div>
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="ingredient_quantity[]">
                                        <label for="ingredient_quantity[]">Quantity</label>
                                    </div>
                                    <!-- <button class="btn btn-danger" id="DeleteIngredientRow" type="button">
                                        <i class="bi bi-trash"></i> Delete
                                    </button> -->
                                </div>
                                <div id="newIngredient"></div>
                                <button id="rowIngredientAdder" type="button" class="btn btn-dark">
                                    <span class="bi bi-plus-square-dotted"></span> ADD
                                </button>
                            </div>    
                        </div>
                        <!-- Steps Container -->
                        <div class="card mb-3">
                            <div class="card-header">
                                Steps 
                            </div>
                            <div class="card-body">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Step 1</span>
                                    <div class="form-floating">
                                        <textarea class="form-control" name="step_description[]" aria-label="step description" aria-describedby="button-addon2"></textarea>
                                        <label for="step_description[]">Description</label>
                                    </div>
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="step_time[]" aria-label="step time" aria-describedby="button-addon3">
                                        <label for="step_time[]">Time (in minutes)</label>
                                    </div>
                                    <!-- <button class="btn btn-danger" id="DeleteStepRow" type="button">
                                        <i class="bi bi-trash"></i> Delete
                                    </button> -->
                                </div>
                                <div id="newStep"></div>
                                <button id="rowStepAdder" type="button" class="btn btn-dark">
                                    <span class="bi bi-plus-square-dotted"></span> ADD
                                </button>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
@section('script')
<script type="text/javascript">

    var nextStepRowID = 1;
    var nextIngredientRowID = 1;

    $("#rowStepAdder").click(function () {

        nextStepRowID++;
        newRowAdd =
            '<div class="input-group mb-3"> <span class="input-group-text">Step ' + nextStepRowID + '</span><div class="form-floating"><textarea class="form-control" name="step_description[] aria-label="step description" aria-describedby="button-addon2"></textarea><label for="step_description">Description</label></div><div class="form-floating"><input type="text" class="form-control" name="step_time[]" aria-label="step time" aria-describedby="button-addon3"><label for="step_time[]">Time (in minutes)</label></div><button class="btn btn-danger" id="DeleteStepRow" type="button"><i class="bi bi-trash"></i> Delete</button></div>';

        $('#newStep').append(newRowAdd);
    });
    $('body').on('click', '#DeleteStepRow', function(){
        $(this).parent().remove();
        // $(this).parent('.row').remove(); //Remove field html
        nextStepRowID--; //Decrement field counter
    });

    $("#rowIngredientAdder").click(function () {

        nextIngredientRowID++;
        newRowAdd =
            '<div class="input-group mb-3"><span class="input-group-text">Ingredient '+ nextIngredientRowID +'</span><div class="form-floating"><input type="text" class="form-control" name="ingredient_name[]"><label for="ingredient_name[]">Name</label></div><div class="form-floating"><input type="text" class="form-control" name="ingredient_quantity[]"><label for="ingredient_quantity[]">Quantity</label></div><button class="btn btn-danger" id="DeleteIngredientRow" type="button"><i class="bi bi-trash"></i> Delete</button></div>';

            $('#newIngredient').append(newRowAdd);
        });
        $('body').on('click', '#DeleteIngredientRow', function(){
        $(this).parent().remove();
        // $(this).parent('.row').remove(); //Remove field html
        nextIngredientRowID--; //Decrement field counter
    });
</script>
@endsection