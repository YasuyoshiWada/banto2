<?php
namespace App\Http\Controllers;
use App\Models\Item;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
            'category' =>'required | array',
        ]);
        $selectedCategories = $request->category;
        // $imageFileName = $this->saveImage($request);
        $item = new Item([
            'name' => $request->name,
            'price' => $request->price,
            'detail' => $request->detail,
            // 'image' => $imageFileName,
            'inventory' =>$request->inventory,
            'status' => 'active',
            'category_id' => $selectedCategories[0]
        ]);

        if ($request->image) {
            $item-> image = 'data:image/'. $request->image->extension() . 'base64,' .base64_encode(file_get_contents($request->image));
        }
        $item->save();
        $item->categories()->attach($selectedCategories);
        return redirect()->route('items.index');
    }
    // private function saveImage($request)
    public function edit($id)
    {
        $item = $this->item->findOrFail($id);

        $all_categories = $this->category->all();
        $selected_categories = [];
        if ($item->categories !== null && $item->categories->isNotEmpty()) {
            foreach($item->categories as $categories_item) {
                $selected_categories[] = $categories_item->id;
            }
        }
        return view('item.edit')
            ->with('item',$item)
            ->with('all_categories' ,$all_categories)
            ->with('selected_categories',$selected_categories);
    }
        public function update(Request $request ,$id){

            $request->validate([
                'name'   =>      'required|min:1|max:200',
                'price'     =>      'required|min:1|max:50',
            'detail'    =>      'required|min:1|max:255',
            'image'     =>      'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'inventory' =>      'required|numeric|min:1|max:50',
            'category'  =>      'required',
        ]);

        $item = $this->item->findOrFail($id);

        $item->name     =       $request->name;
        $item->price    =       $request->price;
        $item->detail   =       $request->detail;
        if ($request->image) {
            $item->image = 'data:image/'. $request->image->extension() . ';base64,' .base64_encode(file_get_contents($request->image));
        }

        $item->inventory=       $request->inventory;
        $item->category_id =    $request->category;

        $item->save();


        return redirect()->route('item.index' , $item->id)->with('item', $item);
    }

    // public function destroy($id){

    //     $item = $this->item->findOrFail($id);
    //     $item->forceDelete();

    //     return redirect()->back();
    // }
}
