// Tenant.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    protected $fillable = ['name', 'phone', 'email', 'room_id'];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
