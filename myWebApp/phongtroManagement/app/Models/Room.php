namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = ['room_number', 'floor', 'capacity', 'price'];

    public function tenants()
    {
        return $this->hasMany(Tenant::class);
    }
}