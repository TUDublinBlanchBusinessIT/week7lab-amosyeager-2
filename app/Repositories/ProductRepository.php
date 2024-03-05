public function store(Request $request)
{
    // Validate incoming data
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'price' => 'required|numeric',
        // Add validation rules for other fields as needed
    ]);

    // Create a new product using the repository
    $product = $this->productRepository->create($validatedData);

    // Optionally, you can return a response or redirect to a page
    return response()->json(['message' => 'Product created successfully', 'product' => $product]);
}
