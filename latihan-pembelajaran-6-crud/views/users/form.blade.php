<div class="form-group">
    <label for="email">Email:</label>
    <input type="email" name="email" class="form-control" value="{{ old('email', $user->email ?? '') }}" required>
</div>
<div class="form-group">
    <label for="fullname">Full Name:</label>
    <input type="text" name="fullname" class="form-control" value="{{ old('fullname', $user->fullname ?? '') }}" required>
</div>
<div class="form-group">
    <label for="address">Address:</label>
    <textarea name="address" class="form-control" required>{{ old('address', $user->address ?? '') }}</textarea>
</div>
<div class="form-group">
    <label for="birthdate">Birthdate:</label>
    <input type="date" name="birthdate" class="form-control" value="{{ old('birthdate', $user->birthdate ?? '') }}" required>
</div>
<div class="form-group">
    <label for="gender">Gender:</label>
    <select name="gender" class="form-control" required>
        <option value="M" {{ (old('gender') ?? $user->gender ?? '') == 'M' ? 'selected' : '' }}>Male</option>
        <option value="F" {{ (old('gender') ?? $user->gender ?? '') == 'F' ? 'selected' : '' }}>Female</option>
    </select>
</div>
<div class="form-group">
    <label for="phone">Phone:</label>
    <input type="text" name="phone" class="form-control" value="{{ old('phone', $user->phone ?? '') }}" required>
</div>
