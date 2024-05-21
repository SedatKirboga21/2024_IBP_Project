<?php
// app/Http/Controllers/Admin/MessageController.php
namespace App\Http\Controllers;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    // In your controller method
    public function showDashboard()
        {
             $messages = Message::all(); // Fetch messages from the database
            return view('dashboard', compact('messages')); // Pass the messages to the view
        }

    public function index()
    {
            $messages = Message::all();
            return view('admin.dashboard', compact('messages'));


    }

    public function yayinla(){
        $messages = Message::all();
        return view('dashboard', ['messages' => $messages]);
    }
    public function showReplyForm($messageId)
    {
        $message = Message::findOrFail($messageId);
        return view('reply_form', compact('message'));
    }

    public function show($id)
    {
        $message = Message::findOrFail($id);
        $message->read_status = true;
        $message->save();
        return view('messages.show', compact('message'));
    }

    public function destroy($id)
    {
        $message = Message::findOrFail($id);
        $message->delete();
        return redirect()->route('admin.dashboard')->with('success', 'Message deleted successfully.');
    }
    public function reply(Request $request, Message $message)
    {
        // Gelen isteği doğrulayın, cevabı alın
        $validatedData = $request->validate([
            'reply' => 'required|string',
        ]);

        // Mesajı yanıtlayarak cevabı kaydedin
        $message->reply = $validatedData['reply'];
        $message->save();

        // Başarılı cevap veya başka bir işlem yapmak için bir dönüş yapın
        return redirect()->back()->with('success', 'Message replied successfully!');
    }

public function store(Request $request)
{
    // Formdan gelen verileri al
    $data = $request->validate([
        'user_id' => 'required|integer',
        'subject' => 'required|string',
        'content' => 'required|string',
    ]);

    // Mesajı oluştur ve veritabanına kaydet
    $message = new Message();
    $message->user_id = $data['user_id'];
    $message->subject = $data['subject'];
    $message->content = $data['content'];
    $message->save();

    // Başarılı bir şekilde kaydedildiğine dair bir mesaj döndür
    return response()->json(['message' => 'Message sent successfully'], 201);
}
public function submit(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Create a new Message model instance
        $message = new Message();
        $message->sender_name = $validatedData['name'];
        $message->sender_email = $validatedData['email'];
        $message->message = $validatedData['message'];

        // Save the message to the database
        $message->save();

        return response()->json(['message' => 'Submission successful'], 200);
    }
    public function refresh(Request $request)
    {
        $messages = Message::all();
        return response()->json($messages, 200);
    }
    public function getUserMessages(Request $request)
    {
        $userId = $request->user()->id; // Kullanıcının ID'sini alın
        $messages = Message::where('user_id', $userId)->get(); // Kullanıcının mesajlarını alın
        return response()->json($messages); // JSON formatında mesajları döndürün
    }


}
