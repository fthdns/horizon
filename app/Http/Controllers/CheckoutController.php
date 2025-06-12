<?php

namespace App\Http\Controllers;

use App\Models\TravelPackage;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Carbon\Carbon;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index(Request $request, $id)
    {
        $item = Transaction::with(['details', 'travelPackage', 'user'])->findOrFail($id);
        return view('pages.checkout', [
            'item' => $item,
        ]);
    }

    public function process(Request $request, $id)
    {
        $travel_package = TravelPackage::findOrFail($id);

        $transaction = Transaction::create([
            'travel_packages_id' => $travel_package->id,
            'users_id' => Auth::user()->id,
            'additional_visa' => 0,
            'transaction_total' => $travel_package->price,
            'transaction_status' => 'IN_CART',
        ]);

        TransactionDetail::create([
            'transactions_id' => $transaction->id,
            'username' => Auth::user()->username,
            'nationality' => 'ID',
            'is_visa' => FALSE,
            'doe_passport' => Carbon::now()->addDay(30)->format('Y-m-d'),
        ]);

        return redirect()->route('checkout', $transaction->id)->with('success', 'Checkout successful, please complete the payment.');
    }

    public function remove(Request $request, $detail_id)
    {
        $item = TransactionDetail::findOrFail($detail_id);

        $transaction = Transaction::with(['details', 'travelPackage'])
            ->findOrFail($item->transactions_id);

        if($item->is_visa){
            $transaction->transaction_total -= 190;
            $transaction->additional_visa -= 190;
        }

        $transaction->transaction_total -= $transaction->travelPackage->price;

        $transaction->save();
        $item->delete();
            
        return redirect()->route('checkout', $item->transactions_id)
            ->with('success', 'Member removed successfully.');
    }

    public function create(Request $request, $id)
    {
        $request->validate([
            'username' => 'required|string|exists:users,username',
            'nationality' => 'required|string',
            'is_visa' => 'required|boolean',
            'doe_passport' => 'required',
        ]);

        $data = $request->all();
        $data['transactions_id'] = $id;

        TransactionDetail::create($data);

        $transaction = Transaction::with(['travelPackage'])
            ->find($id);
        
        if($request->is_visa){
            $transaction->transaction_total += 190;
            $transaction->additional_visa += 190;
        }

        $transaction->transaction_total += $transaction->travelPackage->price;

        $transaction->save();

        return redirect()->route('checkout', $id)
            ->with('success', 'Member added successfully.');
    }

    public function success(Request $request, $id)
    {
        $transaction = Transaction::findorFail($id);
        $transaction->transaction_status = 'PENDING';

        $transaction->save();
        return view('pages.success');
    }
}
