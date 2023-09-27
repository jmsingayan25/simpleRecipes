<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Ingredient;
use App\Models\Level;
use App\Models\Recipe;
use App\Models\Step;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $recipe = Recipe::select('recipes.id', 'recipes.name', 'recipes.description', 'recipes.image', 'recipes.rating', 'levels.   type', DB::raw('SUM(steps.time) as time'))
                    ->join('levels', 'levels.id', '=', 'recipes.levels_id')
                    ->join('steps', 'steps.recipes_id', '=', 'recipes.id')
                    ->groupBy('recipes.id', 'recipes.name', 'recipes.description', 'recipes.image', 'recipes.rating', 'levels.type')
                    ->get();
        dd($recipe);
        return view('recipes.index', compact('recipe'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        $levels = Level::get(['id','type']);
        // dd($levels);
        return view('recipes.create', compact('levels'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        // return redirect()->route('recipes.index')->with('success', 'Recipe added succesfully!');

        $request->validate([
            'recipe_name'        => 'required',
            'recipe_description' => 'required',
            'recipe_image'       => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'step_description'   => 'required',
            'step_time'          => 'required',
            'ingredient_name'    => 'required',

        ]);

        $recipe_name         = $request->recipe_name;
        $recipe_description  = $request->recipe_description;
        $recipe_image        = $request->recipe_image;
        $step_description    = $request->step_description;
        $step_time           = $request->step_time;
        $ingredient_name     = $request->ingredient_name;
        $ingredient_quantity = $request->ingredient_quantity;

        $path = public_path('storage/images/recipes/');
        !is_dir($path) && mkdir($path, 0777, true);

        $imageName = time() . '.' . $recipe_image->extension();

        $recipe_image->move($path, $imageName);

        $recipe              = new Recipe();
        $recipe->name        = $recipe_name;
        $recipe->description = $recipe_description;
        $recipe->image       = $imageName;
        $recipe->rating      = 0;
        $recipe->levels_id   = 1;
        $recipe->user_id     = auth()->user()->id;

        // $recipe->save();

        if($recipe->save()){

            foreach($step_description as $key => $step_description){
                $step              = new Step();
                $step->step        = $key+1;
                $step->description = $step_description;
                $step->time        = $step_time[$key];
                $step->recipes_id  = $recipe->id;
    
                $step->save();
            }    
            
            foreach($ingredient_name as $key => $ingredient_name){
                $ingredient             = new Ingredient();
                $ingredient->name       = $ingredient_name;
                $ingredient->quantity   = $ingredient_quantity[$key];
                $ingredient->recipes_id = $recipe->id;
    
                $ingredient->save();
            }

            return redirect()->route('recipes.index')->with('success', 'Recipe added succesfully!');
        }else{
            return redirect()->back()->with('danger', 'Something went wrong!');
        }
        // return redirect()->route('recipes.index')->with('success', 'Recipe added succesfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Recipe $recipe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recipe $recipe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Recipe $recipe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recipe $recipe)
    {
        //
    }
}
