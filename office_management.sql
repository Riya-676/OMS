-- Database create
CREATE DATABASE office_management;
USE office_management;

-- =========================
-- ADMIN TABLE
-- =========================
CREATE TABLE admin (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL
);

INSERT INTO admin (username, password)
VALUES ('admin', 'admin123');

-- =========================
-- CLIENT TABLE
-- =========================
CREATE TABLE client (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(50) NOT NULL,
    phone VARCHAR(15),
    address VARCHAR(200)
);

INSERT INTO client (name, email, password, phone, address)
VALUES 
('Riya Vagadiya', 'riya@gmail.com', '12345', '9876543210', 'Rajkot');

-- =========================
-- TASK TABLE
-- =========================
CREATE TABLE task (
    id INT AUTO_INCREMENT PRIMARY KEY,
    client_id INT,
    task_name VARCHAR(200),
    task_description VARCHAR(300),
    status VARCHAR(50) DEFAULT 'Pending',
    FOREIGN KEY (client_id) REFERENCES client(id)
);

-- =========================
-- ATTENDANCE TABLE
-- =========================

-- =========================
-- LEAVE REQUEST TABLE
-- =========================
CREATE TABLE leave_request (
    id INT AUTO_INCREMENT PRIMARY KEY,
    client_id INT,
    reason VARCHAR(200),
    leave_date DATE,
    status VARCHAR(50) DEFAULT 'Pending',
    FOREIGN KEY (client_id) REFERENCES client(id)
);
-- PROJECTS TABLE
CREATE TABLE projects (
    id INT AUTO_INCREMENT PRIMARY KEY,
    project_name VARCHAR(100),
    description TEXT,
    start_date DATE,
    end_date DATE,
    status VARCHAR(50)
);

-- TASKS TABLE
CREATE TABLE tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    project_id INT,
    task_name VARCHAR(100),
    assigned_to VARCHAR(50),
    status VARCHAR(50),
    due_date DATE
);

-- TIMESHEET TABLE
CREATE TABLE timesheet (
    id INT AUTO_INCREMENT PRIMARY KEY,
    employee_name VARCHAR(50),
    work_date DATE,
    hours_worked INT,
    work_description TEXT
);
ALTER TABLE leave_request 
ADD duration VARCHAR(50),
ADD leave_type VARCHAR(50),
ADD paid VARCHAR(10);
CREATE TABLE attendance (
    id INT AUTO_INCREMENT PRIMARY KEY,
    client_id INT,
    date DATE,
    check_in TIME NULL,
    check_out TIME NULL,
    status VARCHAR(50)
);

INSERT INTO projects (project_name, description, start_date, end_date, status)
VALUES
('Office Management System', 'Complete OMS software development', '2026-02-01', '2026-04-30', 'Active'),

('Website Redesign', 'Company website UI improvement', '2026-01-15', '2026-03-10', 'Active'),

('Employee Portal', 'Internal employee dashboard creation', '2026-02-10', '2026-05-20', 'Pending');
