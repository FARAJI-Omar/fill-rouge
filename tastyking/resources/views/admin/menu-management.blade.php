@extends('layouts.app')

@section('content')

@push('admin-content')
    <div class="admin-user-management">
        <h1>Menu Management</h1>
        <p class="management-description">Manage your restaurant's menu items</p>

        <div class="menu-controls">
            <div class="search-container">
                <input type="text" class="search-input" placeholder="Search Menu Item ..." />
            </div>

            <div class="category-filter">
                <button class="category-dropdown">All Categories <i class="fas fa-chevron-down"></i></button>
            </div>
        </div>
    </div>

    <hr>

    <div class="menu-items">
        <div class="menu-item-card">
            <div class="item-image">
                <img src="{{ asset('images/sandwish.png') }}" alt="Classic Burger Pomodoro">
            </div>
            <div class="item-details">
                <h3 class="item-name">Classic Burger Pomodoro</h3>
                <div class="item-actions">
                    <button class="edit-btn">Edit</button>
                    <button class="remove-btn">Remove</button>
                </div>
            </div>
        </div>

        <div class="menu-item-card">
            <div class="item-image">
                <img src="{{ asset('images/sandwish.png') }}" alt="Classic Burger Pomodoro">
            </div>
            <div class="item-details">
                <h3 class="item-name">Classic Burger Pomodoro</h3>
                <div class="item-actions">
                    <button class="edit-btn">Edit</button>
                    <button class="remove-btn">Remove</button>
                </div>
            </div>
        </div>

        <div class="menu-item-card">
            <div class="item-image">
                <img src="{{ asset('images/sandwish.png') }}" alt="Classic Burger Pomodoro">
            </div>
            <div class="item-details">
                <h3 class="item-name">Classic Burger Pomodoro</h3>
                <div class="item-actions">
                    <button class="edit-btn">Edit</button>
                    <button class="remove-btn">Remove</button>
                </div>
            </div>
        </div>

          <div class="menu-item-card">
            <div class="item-image">
                <img src="{{ asset('images/sandwish.png') }}" alt="Classic Burger Pomodoro">
            </div>
            <div class="item-details">
                <h3 class="item-name">Classic Burger Pomodoro</h3>
                <div class="item-actions">
                    <button class="edit-btn">Edit</button>
                    <button class="remove-btn">Remove</button>
                </div>
            </div>
        </div>

          <div class="menu-item-card">
            <div class="item-image">
                <img src="{{ asset('images/sandwish.png') }}" alt="Classic Burger Pomodoro">
            </div>
            <div class="item-details">
                <h3 class="item-name">Classic Burger Pomodoro</h3>
                <div class="item-actions">
                    <button class="edit-btn">Edit</button>
                    <button class="remove-btn">Remove</button>
                </div>
            </div>
        </div>

          <div class="menu-item-card">
            <div class="item-image">
                <img src="{{ asset('images/sandwish.png') }}" alt="Classic Burger Pomodoro">
            </div>
            <div class="item-details">
                <h3 class="item-name">Classic Burger Pomodoro</h3>
                <div class="item-actions">
                    <button class="edit-btn">Edit</button>
                    <button class="remove-btn">Remove</button>
                </div>
            </div>
        </div>

          <div class="menu-item-card">
            <div class="item-image">
                <img src="{{ asset('images/sandwish.png') }}" alt="Classic Burger Pomodoro">
            </div>
            <div class="item-details">
                <h3 class="item-name">Classic Burger Pomodoro</h3>
                <div class="item-actions">
                    <button class="edit-btn">Edit</button>
                    <button class="remove-btn">Remove</button>
                </div>
            </div>
        </div>
    </div>

    <hr style="margin-bottom: 4rem">



@endpush

@include('admin.sidebar')
@include('layouts.footer')
@endsection

<style>
    .admin-user-management {
        padding: 4rem 2rem;
    }

    h1 {
        font-size: 2rem;
        font-weight: bold;
        font-family: 'Poppins', sans-serif;
        margin-bottom: 0.5rem;
        color: #333;
    }

    .management-description {
        color: #666;
        font-size: 1rem;
        font-family: 'Poppins', sans-serif;
        margin-bottom: 2rem;
    }

    .menu-controls {
        width: 90%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 2rem;
        gap: 1.5rem;
    }

    .search-container {
        flex: 1;
    }

    .search-input {
        width: 95%;
        padding: 0.75rem 1rem;
        border: #FF7043 1px solid;
        border-radius: 15px;
        background-color: #f5f5f5;
        font-size: 0.9rem;
        color: #333;
    }

    .search-input::placeholder {
        color: #999;
        font-size: 0.9rem;
        font-family: 'Poppins', sans-serif;
    }

    .category-filter {
        min-width: 180px;
    }

    .category-dropdown {
        width: 100%;
        padding: 0.75rem 1rem;
        background-color: #FF7043;
        border: none;
        border-radius: 15px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 0.9rem;
        font-weight: bold;
        color: white;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    .category-dropdown:hover {
        background-color: #F4511E;
    }

    .category-dropdown i {
        margin-left: 0.5rem;
        font-size: 1.1rem;
    }

    hr {
        border: none;
        border-top: 2px solid #FFB30E;
        margin: 0 2rem;
        width: 85%;
    }

    .menu-items {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 5rem;
        padding: 2rem;
        margin-bottom: 2rem;
        width: 90%
    }

    .menu-item-card {
        max-width: 280px;
        background-color: #FFF8DC;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 4px 5px 8px #ffb30e85;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .menu-item-card:hover {
        transform: translateY(-5px);
        box-shadow: 6px 8px 8px #ffb30e8a;
    }

    .item-image {
        width: 100%;
        height: 180px;
        overflow: hidden;
    }

    .item-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .item-details {
        padding: 1rem;
    }

    .item-name {
        font-size: 1rem;
        font-weight: 600;
        color: #333;
        margin-bottom: 1rem;
        font-family: 'Poppins', sans-serif;
    }

    .item-actions {
        display: flex;
        justify-content: space-between;
        gap: 0.5rem;
    }

    .edit-btn, .remove-btn {
        padding: 0.5rem 1rem;
        border: none;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 500;
        cursor: pointer;
        transition: background-color 0.3s ease;
        font-family: 'Poppins', sans-serif;
    }

    .edit-btn {
        background-color: #ffb30e6e;
        color: #333;
        flex: 1;
    }

    .edit-btn:hover {
        background-color: #e0e0e0;
    }

    .remove-btn {
        background-color: #ff7043e8;
        color: white;
        flex: 1;
    }

    .remove-btn:hover {
        background-color: #ff4343e3;
    }



</style>

