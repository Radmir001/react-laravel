import React, { useState } from 'react';

function UserForm() {
  const [name, setName] = useState('');

  const handleSubmit = (event) => {
    event.preventDefault();
    // Here I Implement logic to send data to the Laravel API for user creation/update
    // For now, I can log the name to the console
    console.log('Name submitted:', name);
  };

  return (
    <form onSubmit={handleSubmit}>
      <label>
        Name:
        <input type="text" value={name} onChange={(e) => setName(e.target.value)} />
      </label>
      <button type="submit">Save</button>
    </form>
  );
}

export default UserForm;