<?php
namespace App\Http\Controllers;
use App\Models\Item;
use App\Models\Category;
use Illuminate\Http\Request;
class ItemsController extends Controller
{
    const LOCAL_STORAGE_FOLDER = 'images';
    private $item;
    private $category;
    public function __construct(Item $item,Category $category)
    {
        $this->item = $item;


        $this->category = $category;
    }
    public function index()
    {
        $all_items = $this->item->latest()->paginate(8);
        return view('items.index')->with('all_items',$all_items);

    }

    public function cart_view()
    {
         $all_items = $this->item->latest()->paginate(8);
        return view('items.item-view')->with('all_items',$all_items);
    }
    public function create()
    {
        $all_categories = Category::all();
        $selected_categories = [];
        return view('items.create',compact('all_categories', 'selected_categories'));
    }
    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'name' => 'required | min:1|max:200',
            'price' => 'required | min:1|max:50',
            'detail' => 'required |min:1|max:200',
            'image' => 'required |mimes:jpeg,jpg,png,gif| max:1048',
            'inventory' => 'required |numeric | min:1 max:50',
            // 'category' =>'required | array',
        ]);
        // $selectedCategories = $request->category;
        $imageFileName = $this->saveImage($request);
        $item = new Item([
            'name' => $request->name,
            'price' => $request->price,
            'detail' => $request->detail,
            'image' => $imageFileName,
            'inventory' =>$request->inventory,
            'status' => 'active',
            // 'category_id' => $selectedCategories[0]
        ]);
        $item->save();
        // $item->categories()->attach($selectedCategories);
        return redirect()->route('items.index');
    }
    private function saveImage($request)
    {
        $image_name = time() . '.' . $request->image->extension();
        $request->image->move(public_path(self::LOCAL_STORAGE_FOLDER), $image_name);
        return $image_name;
    }

    
}
