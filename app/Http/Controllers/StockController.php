<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StockController extends Controller
{
    public function explore(Request $request)
    {
        // Assuming the request has some way to determine which record to fetch, 
        // like an ID sent with the form (e.g., stock_id)
        $stockId = $request->input('stock_id'); // Or whatever input you use to identify the record

        // Fetch the customer_id from the stock_data_web table based on the stock_id
        $stockData = StockDataWeb::find($stockId);

        if ($stockData) {
            // Store customer_id in the session
            session(['customer_id' => $stockData->customer_id]);

            // Optionally, store other data you want to use later
            session(['shop_name' => $stockData->shop_name]);

            // Redirect to the dashboard or the next page
            return redirect()->route('dashboard');
        } else {
            // If no data found, handle the error
            return redirect()->back()->with('error', 'Stock data not found.');
        }
    }
}
