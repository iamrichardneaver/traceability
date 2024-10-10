
const express = require('express');
const app = express();
const port = 3000;

app.use(express.json());

const userRoles = [
  'Admin',
  'Farmer',
  'Agronomist',
  'Supplier',
  'Retailer',
  'Consumer'
];

// Get all user roles
app.get('/roles', (req, res) => {
  res.json(userRoles);
});

// Create a new user role
app.post('/roles', (req, res) => {
  const { role } = req.body;
  if (userRoles.includes(role)) {
    return res.status(400).json({ message: 'Role already exists' });
  }
  userRoles.push(role);
  res.status(201).json({ message: 'Role created successfully' });
});

// Update a user role
app.put('/roles/:role', (req, res) => {
  const { role } = req.params;
  const { newRole } = req.body;
  const index = userRoles.indexOf(role);
  if (index === -1) {
    return res.status(404).json({ message: 'Role not found' });
  }
  userRoles[index] = newRole;
  res.json({ message: 'Role updated successfully' });
});

// Delete a user role
app.delete('/roles/:role', (req, res) => {
  const { role } = req.params;
  const index = userRoles.indexOf(role);
  if (index === -1) {
    return res.status(404).json({ message: 'Role not found' });
  }
  userRoles.splice(index, 1);
  res.json({ message: 'Role deleted successfully' });
});

app.get('/', (req, res) => {
  res.send('Welcome to the SAAS Farm ERP & Traceability System');
});

app.listen(port, () => {
  console.log(`Server is running on http://localhost:${port}`);
});
