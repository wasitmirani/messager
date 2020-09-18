@extends('layouts.master')
<div id="app">

@section('content')


 <!-- layout -->
  <div class="layout">
      <!-- navigation -->
      <nav class="navigation">
        <div class="nav-group">
          <ul>
            <li class="logo">
              <a href="#">
                <img src="dist\media\img\logo.png" alt="logo" />
              </a>
            </li>
            <li class="navigation-action-button dropright" title="New" data-placement="right">
              <a href="#" data-intro-js="1" data-toggle="dropdown">
                <i class="mdi mdi-plus"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <a href="#" class="dropdown-item" data-left-sidebar="friends">Start Chat</a>
                <a
                  href="#"
                  class="dropdown-item"
                  data-toggle="modal"
                  data-target="#newGroup"
                >Add Group</a>
                <a
                  href="#"
                  class="dropdown-item"
                  data-toggle="modal"
                  data-target="#intiveUsers"
                >Invite users</a>
              </div>
            </li>
            <li>
              <a
                class="active"
                data-intro-js="2"
                data-left-sidebar="chats"
                href="#"
                data-toggle="tooltip"
                title="Chats"
                data-placement="right"
              >
                <span class="badge badge-warning"></span>
                <i data-feather="message-circle"></i>
              </a>
            </li>
            <li>
              <a
                data-left-sidebar="friends"
                href="#"
                data-toggle="tooltip"
                title="Friends"
                data-placement="right"
              >
                <span class="badge badge-danger"></span>
                <i data-feather="user"></i>
              </a>
            </li>
            <li>
              <a
                data-left-sidebar="favorites"
                data-toggle="tooltip"
                title="Favorites"
                data-placement="right"
                href="#"
              >
                <i data-feather="star"></i>
              </a>
            </li>
            <li class="brackets">
              <a
                data-left-sidebar="archived"
                href="#"
                data-toggle="tooltip"
                title="Archived"
                data-placement="right"
              >
                <i data-feather="archive"></i>
              </a>
            </li>
            <li
              class="d-none d-lg-block"
              data-toggle="tooltip"
              title="Settings"
              data-placement="right"
            >
              <a href="#" data-toggle="modal" data-right-sidebar="settings">
                <i data-feather="settings"></i>
              </a>
            </li>
            <li data-toggle="tooltip" title="User menu" data-placement="right">
              <a href="login.html" data-intro-js="3" data-toggle="dropdown">
                <figure class="avatar avatar-sm">
                  <img src="dist\media\img\avatar9.jpg" class="rounded-circle" alt="image" />
                </figure>
              </a>
              <div class="dropdown-menu">
                <a href="#" class="dropdown-item" data-toggle="modal" data-target="#editProfile">
                  Edit
                  profile
                </a>
                <a href="#" class="dropdown-item" data-right-sidebar="user-profile">Profile</a>
                <a
                  href="#"
                  class="dropdown-item"
                  data-toggle="modal"
                  data-target="#settingsModal"
                >Settings</a>
                <a
                  href="#"
                  class="dropdown-item d-none d-md-block example-app-tour-start"
                >Start Tour</a>
                <div class="dropdown-divider"></div>
                <a href="login.html" class="dropdown-item text-danger">Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
      <!-- ./ navigation -->

      <!-- Chat left sidebar -->
      <div id="chats" class="left-sidebar open">
        <div class="left-sidebar-header">
          <div class="story-block">
            <h4 class="mb-4">Stories</h4>
            <div class="story-items mb-4" data-intro-js="4">
              <div class="story-item">
                <a href="#" class="avatar avatar-border-primary">
                  <span class="avatar-title bg-info rounded-circle">M</span>
                  <span class="story-content">Matteo Reedy</span>
                </a>
              </div>
              <div class="story-item">
                <a href="#" class="avatar avatar-border-success">
                  <img src="dist\media\img\avatar6.jpg" class="rounded-circle" alt="image" />
                  <span class="story-content">Meredith Dyet</span>
                </a>
              </div>
              <div class="story-item">
                <a href="#" class="avatar avatar-border-primary">
                  <span class="avatar-title bg-success rounded-circle">C</span>
                  <span class="story-content">Cesar Weems</span>
                </a>
              </div>
              <div class="story-item">
                <a href="#" class="avatar">
                  <img src="dist\media\img\avatar2.jpg" class="rounded-circle" alt="image" />
                  <span class="story-content">Pansy Coghill</span>
                </a>
              </div>
              <div class="story-item">
                <a href="#" class="avatar">
                  <img src="dist\media\img\avatar7.jpg" class="rounded-circle" alt="image" />
                  <span class="story-content">Cullen Scyone</span>
                </a>
              </div>
              <div class="story-item">
                <a href="#" class="avatar">
                  <img src="dist\media\img\avatar1.jpg" class="rounded-circle" alt="image" />
                  <span class="story-content">North Boorer</span>
                </a>
              </div>
              <div class="story-item">
                <a href="#" class="avatar">
                  <img src="dist\media\img\avatar9.jpg" class="rounded-circle" alt="image" />
                  <span class="story-content">Dilan Maasze</span>
                </a>
              </div>
              <div class="story-item">
                <a href="#" class="avatar">
                  <img src="dist\media\img\avatar5.jpg" class="rounded-circle" alt="image" />
                  <span class="story-content">Antons Cornier</span>
                </a>
              </div>
            </div>
          </div>
          <form>
            <div class="input-group">
              <div class="input-group-prepend">
                <button class="btn" type="button">
                  <i class="ti-search"></i>
                </button>
              </div>
              <input type="text" class="form-control" placeholder="Search chats" />
            </div>
          </form>
        </div>
        <div class="left-sidebar-content">
          <ul class="list-group list-group-flush">
            <li class="list-group-item active">
              <div>
                <figure class="avatar mr-3">
                  <img src="dist\media\img\avatar6.jpg" class="rounded-circle" alt="image" />
                </figure>
              </div>
              <div class="users-list-body">
                <div>
                  <h5>Maribel Mallon</h5>
                  <p>I sent you all the files. Good luck with 😃</p>
                </div>
                <div class="users-list-action">
                  <small class="text-muted">11:05 AM</small>
                  <div class="action-toggle">
                    <div class="dropdown">
                      <a data-toggle="dropdown" href="#">
                        <i class="mdi mdi-dots-horizontal"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item">Open</a>
                        <a href="#" data-right-sidebar="user-profile" class="dropdown-item">Profile</a>
                        <a href="#" class="dropdown-item">Add to archive</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item text-danger example-delete-chat">Delete</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li data-intro-js="5" class="list-group-item unread-chat">
              <figure class="avatar avatar-state-success mr-3">
                <span class="avatar-title bg-secondary rounded-circle">T</span>
              </figure>
              <div class="users-list-body">
                <div>
                  <h5>Townsend Seary</h5>
                  <p>What's up, how are you?</p>
                </div>
                <div class="users-list-action">
                  <div class="new-message-count">3</div>
                  <small>03:41 PM</small>
                  <div class="action-toggle">
                    <div class="dropdown">
                      <a data-toggle="dropdown" href="#">
                        <i class="mdi mdi-dots-horizontal"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item">Open</a>
                        <a href="#" data-right-sidebar="user-profile" class="dropdown-item">Profile</a>
                        <a href="#" class="dropdown-item">Add to archive</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item text-danger example-delete-chat">Delete</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="list-group-item unread-chat">
              <figure class="avatar avatar-state-warning mr-3">
                <img src="dist\media\img\avatar4.jpg" class="rounded-circle" alt="image" />
              </figure>
              <div class="users-list-body">
                <div>
                  <h5>Forest Kroch</h5>
                  <p>
                    <i class="mdi mdi-camera mr-1"></i> Photo
                  </p>
                </div>
                <div class="users-list-action">
                  <div class="new-message-count">1</div>
                  <small>Yesterday</small>
                  <div class="action-toggle">
                    <div class="dropdown">
                      <a data-toggle="dropdown" href="#">
                        <i class="mdi mdi-dots-horizontal"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item">Open</a>
                        <a href="#" data-right-sidebar="user-profile" class="dropdown-item">Profile</a>
                        <a href="#" class="dropdown-item">Add to archive</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item text-danger example-delete-chat">Delete</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div>
                <figure class="avatar mr-3">
                  <img src="dist\media\img\avatar6.jpg" class="rounded-circle" alt="image" />
                </figure>
              </div>
              <div class="users-list-body">
                <div>
                  <h5>Margaretta Worvell</h5>
                  <p>
                    <i class="mdi mdi-check-all text-info mr-1"></i> I need you today. Can you
                    come with me?
                  </p>
                </div>
                <div class="users-list-action">
                  <small class="text-muted">03:41 PM</small>
                  <div class="action-toggle">
                    <div class="dropdown">
                      <a data-toggle="dropdown" href="#">
                        <i class="mdi mdi-dots-horizontal"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item">Open</a>
                        <a href="#" data-right-sidebar="user-profile" class="dropdown-item">Profile</a>
                        <a href="#" class="dropdown-item">Add to archive</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item text-danger example-delete-chat">Delete</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <figure class="avatar mr-3">
                <span class="avatar-title bg-warning bg-success rounded-circle">
                  <i class="mdi mdi-account-group-outline"></i>
                </span>
              </figure>
              <div class="users-list-body">
                <div>
                  <h5>😍 Business Group</h5>
                  <p>
                    <strong>Maher Ruslandi:</strong>Hello!!!
                  </p>
                </div>
                <div class="users-list-action">
                  <small class="text-muted">Yesterday</small>
                  <div class="action-toggle">
                    <div class="dropdown">
                      <a data-toggle="dropdown" href="#">
                        <i class="mdi mdi-dots-horizontal"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item">Open</a>
                        <a
                          href="#"
                          data-right-sidebar="user-profile"
                          class="dropdown-item"
                        >Leave group</a>
                        <a href="#" class="dropdown-item">Add to archive</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item text-danger example-delete-chat">Delete</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div>
                <figure class="avatar avatar-state-warning mr-3">
                  <img src="dist\media\img\avatar6.jpg" class="rounded-circle" alt="image" />
                </figure>
              </div>
              <div class="users-list-body">
                <div>
                  <h5>Jennica Kindred</h5>
                  <p>
                    <i class="mdi mdi-video-outline mr-1"></i>
                    Video
                  </p>
                </div>
                <div class="users-list-action">
                  <small class="text-muted">03:41 PM</small>
                  <div class="action-toggle">
                    <div class="dropdown">
                      <a data-toggle="dropdown" href="#">
                        <i class="mdi mdi-dots-horizontal"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item">Open</a>
                        <a href="#" data-right-sidebar="user-profile" class="dropdown-item">Profile</a>
                        <a href="#" class="dropdown-item">Add to archive</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item text-danger example-delete-chat">Delete</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div>
                <figure class="avatar mr-3">
                  <span class="avatar-title bg-info rounded-circle">M</span>
                </figure>
              </div>
              <div class="users-list-body">
                <div>
                  <h5>Marvin Rohan</h5>
                  <p>
                    <i class="mdi mdi-microphone mr-1"></i>
                    Sent audio file
                  </p>
                </div>
                <div class="users-list-action">
                  <small class="text-muted">Yesterday</small>
                  <div class="action-toggle">
                    <div class="dropdown">
                      <a data-toggle="dropdown" href="#">
                        <i class="mdi mdi-dots-horizontal"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item">Open</a>
                        <a href="#" data-right-sidebar="user-profile" class="dropdown-item">Profile</a>
                        <a href="#" class="dropdown-item">Add to archive</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item text-danger example-delete-chat">Delete</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div>
                <figure class="avatar mr-3">
                  <img src="dist\media\img\avatar7.jpg" class="rounded-circle" alt="image" />
                </figure>
              </div>
              <div class="users-list-body">
                <div>
                  <h5>Townsend Seary</h5>
                  <p>Where are you?</p>
                </div>
                <div class="users-list-action">
                  <small class="text-muted">03:41 PM</small>
                  <div class="action-toggle">
                    <div class="dropdown">
                      <a data-toggle="dropdown" href="#">
                        <i class="mdi mdi-dots-horizontal"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item">Open</a>
                        <a href="#" data-right-sidebar="user-profile" class="dropdown-item">Profile</a>
                        <a href="#" class="dropdown-item">Add to archive</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item text-danger example-delete-chat">Delete</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div>
                <figure class="avatar mr-3">
                  <span class="avatar-title bg-secondary rounded-circle">G</span>
                </figure>
              </div>
              <div class="users-list-body">
                <div>
                  <h5>Gibb Ivanchin</h5>
                  <p>I want to visit them.</p>
                </div>
                <div class="users-list-action">
                  <small class="text-muted">03:41 PM</small>
                  <div class="action-toggle">
                    <div class="dropdown">
                      <a data-toggle="dropdown" href="#">
                        <i class="mdi mdi-dots-horizontal"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item">Open</a>
                        <a href="#" data-right-sidebar="user-profile" class="dropdown-item">Profile</a>
                        <a href="#" class="dropdown-item">Add to archive</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item text-danger example-delete-chat">Delete</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div>
                <figure class="avatar mr-3">
                  <img src="dist\media\img\avatar1.jpg" class="rounded-circle" alt="image" />
                </figure>
              </div>
              <div class="users-list-body">
                <div>
                  <h5>Harald Kowalski</h5>
                  <p>Reports are ready.</p>
                </div>
                <div class="users-list-action">
                  <small class="text-muted">03:41 PM</small>
                  <div class="action-toggle">
                    <div class="dropdown">
                      <a data-toggle="dropdown" href="#">
                        <i class="mdi mdi-dots-horizontal"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item">Open</a>
                        <a href="#" data-right-sidebar="user-profile" class="dropdown-item">Profile</a>
                        <a href="#" class="dropdown-item">Add to archive</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item text-danger example-delete-chat">Delete</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div>
                <figure class="avatar mr-3">
                  <span class="avatar-title bg-success rounded-circle">A</span>
                </figure>
              </div>
              <div class="users-list-body">
                <div>
                  <h5>Afton McGilvra</h5>
                  <p>I do not know where is it. Don't ask me, please.</p>
                </div>
                <div class="users-list-action">
                  <small class="text-muted">03:41 PM</small>
                  <div class="action-toggle">
                    <div class="dropdown">
                      <a data-toggle="dropdown" href="#">
                        <i class="mdi mdi-dots-horizontal"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item">Open</a>
                        <a href="#" data-right-sidebar="user-profile" class="dropdown-item">Profile</a>
                        <a href="#" class="dropdown-item">Add to archive</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item text-danger example-delete-chat">Delete</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div>
                <figure class="avatar mr-3">
                  <img src="dist\media\img\avatar2.jpg" class="rounded-circle" alt="image" />
                </figure>
              </div>
              <div class="users-list-body">
                <div>
                  <h5>Alexandr Donnelly</h5>
                  <p>Can anyone enter the meeting?</p>
                </div>
                <div class="users-list-action">
                  <small class="text-muted">03:41 PM</small>
                  <div class="action-toggle">
                    <div class="dropdown">
                      <a data-toggle="dropdown" href="#">
                        <i class="mdi mdi-dots-horizontal"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item">Open</a>
                        <a href="#" data-right-sidebar="user-profile" class="dropdown-item">Profile</a>
                        <a href="#" class="dropdown-item">Add to archive</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item text-danger example-delete-chat">Delete</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <!-- ./ Chat left sidebar -->

      <!-- Friends left sidebar -->
      <div id="friends" class="left-sidebar">
        <div class="left-sidebar-header">
          <form>
            <h4 class="mb-4">Friends</h4>
            <div class="input-group">
              <div class="input-group-prepend">
                <button class="btn" type="button">
                  <i class="ti-search"></i>
                </button>
              </div>
              <input type="text" class="form-control" placeholder="Search friends" />
            </div>
          </form>
        </div>
        <div class="left-sidebar-content">
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <div>
                <figure class="avatar mr-3">
                  <img src="dist\media\img\avatar9.jpg" class="rounded-circle" alt="image" />
                </figure>
              </div>
              <div class="users-list-body">
                <div>
                  <h5>Harrietta Souten</h5>
                  <p>Dental Hygienist</p>
                </div>
                <div class="users-list-action">
                  <div class="action-toggle">
                    <div class="dropdown">
                      <a data-toggle="dropdown" href="#">
                        <i class="mdi mdi-dots-horizontal"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item">New chat</a>
                        <a href="#" data-right-sidebar="user-profile" class="dropdown-item">Profile</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item text-danger">Block</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div>
                <figure class="avatar avatar-state-warning mr-3">
                  <span class="avatar-title bg-success rounded-circle">A</span>
                </figure>
              </div>
              <div class="users-list-body">
                <div>
                  <h5>Aline McShee</h5>
                  <p>Marketing Assistant</p>
                </div>
                <div class="users-list-action">
                  <div class="action-toggle">
                    <div class="dropdown">
                      <a data-toggle="dropdown" href="#">
                        <i class="mdi mdi-dots-horizontal"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item">New chat</a>
                        <a href="#" data-right-sidebar="user-profile" class="dropdown-item">Profile</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item text-danger">Block</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div>
                <figure class="avatar avatar-state-success mr-3">
                  <img src="dist\media\img\avatar6.jpg" class="rounded-circle" alt="image" />
                </figure>
              </div>
              <div class="users-list-body">
                <div>
                  <h5>Brietta Blogg</h5>
                  <p>Actuary</p>
                </div>
                <div class="users-list-action">
                  <div class="action-toggle">
                    <div class="dropdown">
                      <a data-toggle="dropdown" href="#">
                        <i class="mdi mdi-dots-horizontal"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item">New chat</a>
                        <a href="#" data-right-sidebar="user-profile" class="dropdown-item">Profile</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item text-danger">Block</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div>
                <figure class="avatar avatar-state-success mr-3">
                  <img src="dist\media\img\avatar3.jpg" class="rounded-circle" alt="image" />
                </figure>
              </div>
              <div class="users-list-body">
                <div>
                  <h5>Karl Hubane</h5>
                  <p>Chemical Engineer</p>
                </div>
                <div class="users-list-action">
                  <div class="action-toggle">
                    <div class="dropdown">
                      <a data-toggle="dropdown" href="#">
                        <i class="mdi mdi-dots-horizontal"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item">New chat</a>
                        <a href="#" data-right-sidebar="user-profile" class="dropdown-item">Profile</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item text-danger">Block</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div>
                <figure class="avatar mr-3">
                  <img src="dist\media\img\avatar2.jpg" class="rounded-circle" alt="image" />
                </figure>
              </div>
              <div class="users-list-body">
                <div>
                  <h5>Jillana Tows</h5>
                  <p>Project Manager</p>
                </div>
                <div class="users-list-action">
                  <div class="action-toggle">
                    <div class="dropdown">
                      <a data-toggle="dropdown" href="#">
                        <i class="mdi mdi-dots-horizontal"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item">New chat</a>
                        <a href="#" data-right-sidebar="user-profile" class="dropdown-item">Profile</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item text-danger">Block</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div>
                <figure class="avatar avatar-state-success mr-3">
                  <span class="avatar-title bg-info rounded-circle">AD</span>
                </figure>
              </div>
              <div class="users-list-body">
                <div>
                  <h5>Alina Derington</h5>
                  <p>Nurse</p>
                </div>
                <div class="users-list-action">
                  <div class="action-toggle">
                    <div class="dropdown">
                      <a data-toggle="dropdown" href="#">
                        <i class="mdi mdi-dots-horizontal"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item">New chat</a>
                        <a href="#" data-right-sidebar="user-profile" class="dropdown-item">Profile</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item text-danger">Block</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div>
                <figure class="avatar avatar-state-secondary mr-3">
                  <span class="avatar-title bg-warning rounded-circle">S</span>
                </figure>
              </div>
              <div class="users-list-body">
                <div>
                  <h5>Stevy Kermeen</h5>
                  <p>Associate Professor</p>
                </div>
                <div class="users-list-action">
                  <div class="action-toggle">
                    <div class="dropdown">
                      <a data-toggle="dropdown" href="#">
                        <i class="mdi mdi-dots-horizontal"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item">New chat</a>
                        <a href="#" data-right-sidebar="user-profile" class="dropdown-item">Profile</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item text-danger">Block</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div>
                <figure class="avatar mr-3">
                  <img src="dist\media\img\avatar1.jpg" class="rounded-circle" alt="image" />
                </figure>
              </div>
              <div class="users-list-body">
                <div>
                  <h5>Stevy Kermeen</h5>
                  <p>Senior Quality Engineer</p>
                </div>
                <div class="users-list-action">
                  <div class="action-toggle">
                    <div class="dropdown">
                      <a data-toggle="dropdown" href="#">
                        <i class="mdi mdi-dots-horizontal"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item">New chat</a>
                        <a href="#" data-right-sidebar="user-profile" class="dropdown-item">Profile</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item text-danger">Block</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div>
                <figure class="avatar mr-3">
                  <img src="dist\media\img\avatar5.jpg" class="rounded-circle" alt="image" />
                </figure>
              </div>
              <div class="users-list-body">
                <div>
                  <h5>Gloriane Shimmans</h5>
                  <p>Web Designer</p>
                </div>
                <div class="users-list-action">
                  <div class="action-toggle">
                    <div class="dropdown">
                      <a data-toggle="dropdown" href="#">
                        <i class="mdi mdi-dots-horizontal"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item">New chat</a>
                        <a href="#" data-right-sidebar="user-profile" class="dropdown-item">Profile</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item text-danger">Block</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div>
                <figure class="avatar avatar-state-warning mr-3">
                  <span class="avatar-title bg-secondary rounded-circle">B</span>
                </figure>
              </div>
              <div class="users-list-body">
                <div>
                  <h5>Bernhard Perrett</h5>
                  <p>Software Engineer</p>
                </div>
                <div class="users-list-action">
                  <div class="action-toggle">
                    <div class="dropdown">
                      <a data-toggle="dropdown" href="#">
                        <i class="mdi mdi-dots-horizontal"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item">New chat</a>
                        <a href="#" data-right-sidebar="user-profile" class="dropdown-item">Profile</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item text-danger">Block</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <!-- ./ Friends left sidebar -->

      <!-- Favorites left sidebar -->
      <div id="favorites" class="left-sidebar">
        <div class="left-sidebar-header">
          <form>
            <h4 class="mb-4">Favorites</h4>
            <div class="input-group">
              <div class="input-group-prepend">
                <button class="btn" type="button">
                  <i class="ti-search"></i>
                </button>
              </div>
              <input type="text" class="form-control" placeholder="Search favorites" />
            </div>
          </form>
        </div>
        <div class="left-sidebar-content">
          <ul class="list-group list-group-flush users-list">
            <li class="list-group-item">
              <div class="users-list-body">
                <div>
                  <h5>Jennica Kindred</h5>
                  <p>I know how important this file is to you. You can trust me ;)</p>
                </div>
                <div class="users-list-action">
                  <div class="action-toggle">
                    <div class="dropdown">
                      <a data-toggle="dropdown" href="#">
                        <i class="mdi mdi-dots-horizontal"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item">Open</a>
                        <a href="#" class="dropdown-item">Remove favorites</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="users-list-body">
                <div>
                  <h5>Marvin Rohan</h5>
                  <p>Lorem ipsum dolor sitsdc sdcsdc sdcsdcs</p>
                </div>
                <div class="users-list-action">
                  <div class="action-toggle">
                    <div class="dropdown">
                      <a data-toggle="dropdown" href="#">
                        <i class="mdi mdi-dots-horizontal"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item">Open</a>
                        <a href="#" class="dropdown-item">Remove favorites</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="users-list-body">
                <div>
                  <h5>Frans Hanscombe</h5>
                  <p>Lorem ipsum dolor sitsdc sdcsdc sdcsdcs</p>
                </div>
                <div class="users-list-action">
                  <div class="action-toggle">
                    <div class="dropdown">
                      <a data-toggle="dropdown" href="#">
                        <i class="mdi mdi-dots-horizontal"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item">Open</a>
                        <a href="#" class="dropdown-item">Remove favorites</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="users-list-body">
                <div>
                  <h5>Karl Hubane</h5>
                  <p>Lorem ipsum dolor sitsdc sdcsdc sdcsdcs</p>
                </div>
                <div class="users-list-action">
                  <div class="action-toggle">
                    <div class="dropdown">
                      <a data-toggle="dropdown" href="#">
                        <i class="mdi mdi-dots-horizontal"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item">Open</a>
                        <a href="#" class="dropdown-item">Remove favorites</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <!-- ./ Favorites left sidebar -->

      <!-- Archived left sidebar -->
      <div id="archived" class="left-sidebar">
        <div class="left-sidebar-header">
          <form>
            <h4 class="mb-4">Archived</h4>
            <div class="input-group">
              <div class="input-group-prepend">
                <button class="btn" type="button">
                  <i class="ti-search"></i>
                </button>
              </div>
              <input type="text" class="form-control" placeholder="Search archived" />
            </div>
          </form>
        </div>
        <div class="left-sidebar-content">
          <ul class="list-group list-group-flush users-list">
            <li class="list-group-item">
              <figure class="avatar mr-3">
                <span class="avatar-title bg-danger rounded-circle">M</span>
              </figure>
              <div class="users-list-body">
                <div>
                  <h5>Mercedes Pllu</h5>
                  <p>I know how important this file is to you. You can trust me ;)</p>
                </div>
                <div class="users-list-action">
                  <div class="action-toggle">
                    <div class="dropdown">
                      <a data-toggle="dropdown" href="#">
                        <i class="mdi mdi-dots-horizontal"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item">Open</a>
                        <a href="#" class="dropdown-item">Restore</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item text-danger">Delete</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <figure class="avatar mr-3">
                <span class="avatar-title bg-secondary rounded-circle">R</span>
              </figure>
              <div class="users-list-body">
                <div>
                  <h5>Rochelle Golley</h5>
                  <p>Lorem ipsum dolor sitsdc sdcsdc sdcsdcs</p>
                </div>
                <div class="users-list-action">
                  <div class="action-toggle">
                    <div class="dropdown">
                      <a data-toggle="dropdown" href="#">
                        <i class="mdi mdi-dots-horizontal"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item">Open</a>
                        <a href="#" class="dropdown-item">Restore</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item text-danger">Delete</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <!-- ./ Archived left sidebar -->

      <!-- chat -->
      <div class="chat">
        <!-- no-message -->
        <div class="chat-preloader d-none">
          <div class="spinner-border" role="status">
            <span class="sr-only">Loading...</span>
          </div>
        </div>
        <div class="no-message-container">
          <div class="row mb-5">
            <div class="col-md-4 offset-4">
              <img src="dist\media\svg\chat_empty.svg" class="img-fluid" alt="image" />
            </div>
          </div>
          <p class="lead">
            Choose a chat or start a
            <a href="#" data-left-sidebar="friends">new chat</a>.
          </p>
        </div>
        <div class="chat-header">
          <div class="chat-header-user">
            <figure class="avatar avatar-state-success">
              <img src="dist\media\img\avatar6.jpg" class="rounded-circle" alt="image" />
            </figure>
            <div>
              <h5>Maribel Mallon</h5>
              <small class="text-success">Online</small>
            </div>
          </div>
          <div class="chat-header-action">
            <ul class="list-inline" data-intro-js="7">
              <li class="list-inline-item d-inline d-lg-none">
                <a href="#" class="btn btn-danger btn-floating example-chat-close">
                  <i class="mdi mdi-arrow-left"></i>
                </a>
              </li>
              <li class="list-inline-item" data-toggle="tooltip" title="Voice call">
                <a href="#" class="btn btn-info btn-floating" data-right-sidebar="notifications">
                  <i class="mdi mdi-bell-outline"></i>
                </a>
              </li>
              <li class="list-inline-item" data-toggle="tooltip" title="Voice call">
                <a href="#" class="btn btn-success btn-floating voice-call-request">
                  <i class="mdi mdi-phone"></i>
                </a>
              </li>
              <li class="list-inline-item" data-toggle="tooltip" title="Video call">
                <a href="#" class="btn btn-warning btn-floating video-call-request">
                  <i class="mdi mdi-video-outline"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#" class="btn btn-dark btn-floating" data-toggle="dropdown">
                  <i class="mdi mdi-dots-horizontal"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                  <a href="#" data-right-sidebar="user-profile" class="dropdown-item">Profile</a>
                  <a href="#" class="dropdown-item example-close-selected-chat">Close chat</a>
                  <a href="#" class="dropdown-item">Add to archive</a>
                  <a href="#" class="dropdown-item example-delete-chat">Delete</a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item text-danger example-block-user">Block</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="chat-body">
          <div class="messages">
            <div class="message-item in">
              <div class="message-avatar">
                <figure class="avatar avatar-sm">
                  <img src="dist\media\img\avatar6.jpg" class="rounded-circle" alt="image" />
                </figure>
                <div>
                  <h5>Maribel Mallon</h5>
                  <div class="time">10:12 PM</div>
                </div>
              </div>
              <div class="message-content">
                <div class="message-text">Hello, Blondy Neeson 😃</div>
                <div class="dropdown">
                  <a href="#" data-toggle="dropdown">
                    <i class="mdi mdi-dots-horizontal"></i>
                  </a>
                  <div class="dropdown-menu">
                    <a href="#" class="dropdown-item">Reply</a>
                    <a href="#" class="dropdown-item">Forward</a>
                    <a href="#" class="dropdown-item">Copy</a>
                    <a href="#" class="dropdown-item">Starred</a>
                    <a href="#" class="dropdown-item example-delete-message">Delete</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="message-item in">
              <div class="message-content">
                <div class="message-text">How do you feel today? I want to ask you something.</div>
                <div class="dropdown">
                  <a href="#" data-toggle="dropdown">
                    <i class="mdi mdi-dots-horizontal"></i>
                  </a>
                  <div class="dropdown-menu">
                    <a href="#" class="dropdown-item">Reply</a>
                    <a href="#" class="dropdown-item">Forward</a>
                    <a href="#" class="dropdown-item">Copy</a>
                    <a href="#" class="dropdown-item">Starred</a>
                    <a href="#" class="dropdown-item example-delete-message">Delete</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="message-item out">
              <div class="message-avatar">
                <figure class="avatar avatar-sm">
                  <img src="dist\media\img\avatar9.jpg" class="rounded-circle" alt="image" />
                </figure>
                <div>
                  <h5>Matteo Reedy</h5>
                  <div class="time">
                    01:20 PM
                    <i class="mdi mdi-check-all text-info ml-1"></i>
                  </div>
                </div>
              </div>
              <div class="message-content">
                <div class="message-text">
                  Hello 😃
                  <br />
                  <br />All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as
                  necessary, making this the first true generator on the Internet. It uses a dictionary of
                  over 200 Latin words, combined with a handful of model sentence structures, to generate
                  Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free
                  from repetition, injected humour, or non-characteristic words etc.
                </div>
                <div class="dropdown">
                  <a href="#" data-toggle="dropdown">
                    <i class="mdi mdi-dots-horizontal"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a href="#" class="dropdown-item">Reply</a>
                    <a href="#" class="dropdown-item">Forward</a>
                    <a href="#" class="dropdown-item">Copy</a>
                    <a href="#" class="dropdown-item">Starred</a>
                    <a href="#" class="dropdown-item example-delete-message">Delete</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="message-item in">
              <div class="message-avatar">
                <figure class="avatar avatar-sm">
                  <img src="dist\media\img\avatar6.jpg" class="rounded-circle" alt="image" />
                </figure>
                <div>
                  <h5>Maribel Mallon</h5>
                  <div class="time">10:43 AM</div>
                </div>
              </div>
              <div class="message-content">
                <audio controls>
                  <source src="tags\horse.ogv" type="audio/ogg" />
                  <source src="tags\horse.mp3" type="audio/mpeg" />Your browser does not support the audio element.
                </audio>
                <div class="dropdown">
                  <a href="#" data-toggle="dropdown">
                    <i class="mdi mdi-dots-horizontal"></i>
                  </a>
                  <div class="dropdown-menu">
                    <a href="#" class="dropdown-item">Reply</a>
                    <a href="#" class="dropdown-item">Forward</a>
                    <a href="#" class="dropdown-item">Copy</a>
                    <a href="#" class="dropdown-item">Starred</a>
                    <a href="#" class="dropdown-item example-delete-message">Delete</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="message-item out">
              <div class="message-avatar">
                <figure class="avatar avatar-sm">
                  <img src="dist\media\img\avatar9.jpg" class="rounded-circle" alt="image" />
                </figure>
                <div>
                  <h5>Matteo Reedy</h5>
                  <div class="time">
                    10:43 AM
                    <i class="mdi mdi-check-all text-info ml-1"></i>
                  </div>
                </div>
              </div>
              <div class="message-content">
                <audio controls>
                  <source src="tags\horse.ogv" type="audio/ogg" />
                  <source src="tags\horse.mp3" type="audio/mpeg" />Your browser does not support the audio element.
                </audio>
                <div class="dropdown">
                  <a href="#" data-toggle="dropdown">
                    <i class="mdi mdi-dots-horizontal"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a href="#" class="dropdown-item">Reply</a>
                    <a href="#" class="dropdown-item">Forward</a>
                    <a href="#" class="dropdown-item">Copy</a>
                    <a href="#" class="dropdown-item">Starred</a>
                    <a href="#" class="dropdown-item example-delete-message">Delete</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="message-item out">
              <div class="message-content">
                <div class="message-text">You are good ❤❤</div>
                <div class="dropdown">
                  <a href="#" data-toggle="dropdown">
                    <i class="mdi mdi-dots-horizontal"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a href="#" class="dropdown-item">Reply</a>
                    <a href="#" class="dropdown-item">Forward</a>
                    <a href="#" class="dropdown-item">Copy</a>
                    <a href="#" class="dropdown-item">Starred</a>
                    <a href="#" class="dropdown-item example-delete-message">Delete</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="message-item in">
              <div class="message-avatar">
                <figure class="avatar avatar-sm">
                  <img src="dist\media\img\avatar6.jpg" class="rounded-circle" alt="image" />
                </figure>
                <div>
                  <h5>Maribel Mallon</h5>
                  <div class="time">11:59 PM</div>
                </div>
              </div>
              <div class="message-content">
                <div class="message-text">I want to send you a file.</div>
                <div class="dropdown">
                  <a href="#" data-toggle="dropdown">
                    <i class="mdi mdi-dots-horizontal"></i>
                  </a>
                  <div class="dropdown-menu">
                    <a href="#" class="dropdown-item">Reply</a>
                    <a href="#" class="dropdown-item">Forward</a>
                    <a href="#" class="dropdown-item">Copy</a>
                    <a href="#" class="dropdown-item">Starred</a>
                    <a href="#" class="dropdown-item example-delete-message">Delete</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="message-item in">
              <div class="message-content message-file">
                <div class="message-text d-flex">
                  <div class="file-icon">
                    <i class="mdi mdi-file-pdf-box-outline"></i>
                  </div>
                  <div>
                    <div>
                      test-filename.pdf
                      <small class="text-muted small">(50KB)</small>
                    </div>
                    <ul class="list-inline mt-2">
                      <li class="list-inline-item mb-0">
                        <a href="#" class="btn btn-sm btn-light-success btn-floating" title="View">
                          <i class="mdi mdi-link"></i>
                        </a>
                      </li>
                      <li class="list-inline-item mb-0">
                        <a
                          href="#"
                          class="btn btn-sm btn-light-success btn-floating"
                          title="Download"
                        >
                          <i class="mdi mdi-download"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="dropdown">
                  <a href="#" data-toggle="dropdown">
                    <i class="mdi mdi-dots-horizontal"></i>
                  </a>
                  <div class="dropdown-menu">
                    <a href="#" class="dropdown-item">Reply</a>
                    <a href="#" class="dropdown-item">Forward</a>
                    <a href="#" class="dropdown-item">Copy</a>
                    <a href="#" class="dropdown-item">Starred</a>
                    <a href="#" class="dropdown-item example-delete-message">Delete</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="message-item messages-divider sticky-top" data-label="Yesterday"></div>
            <div class="message-item out">
              <div class="message-avatar">
                <figure class="avatar avatar-sm">
                  <img src="dist\media\img\avatar9.jpg" class="rounded-circle" alt="image" />
                </figure>
                <div>
                  <h5>Matteo Reedy</h5>
                  <div class="time">
                    07:45 AM
                    <i class="mdi mdi-check-all text-info ml-1"></i>
                  </div>
                </div>
              </div>
              <div class="message-content">
                <div class="message-text">
                  Thank you so much. These files are very important to me. I guess
                  you didn't make any changes
                  to these files. So I need the original versions of these files. Thank you very much
                  again.
                </div>
                <div class="dropdown">
                  <a href="#" data-toggle="dropdown">
                    <i class="mdi mdi-dots-horizontal"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a href="#" class="dropdown-item">Reply</a>
                    <a href="#" class="dropdown-item">Forward</a>
                    <a href="#" class="dropdown-item">Copy</a>
                    <a href="#" class="dropdown-item">Starred</a>
                    <a href="#" class="dropdown-item example-delete-message">Delete</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="message-item in">
              <div class="message-avatar">
                <figure class="avatar avatar-sm">
                  <img src="dist\media\img\avatar6.jpg" class="rounded-circle" alt="image" />
                </figure>
                <div>
                  <h5>Maribel Mallon</h5>
                  <div class="time">07:15 AM</div>
                </div>
              </div>
              <div class="message-content">
                <div class="message-text">I'm about to send the other file now.</div>
                <div class="dropdown">
                  <a href="#" data-toggle="dropdown">
                    <i class="mdi mdi-dots-horizontal"></i>
                  </a>
                  <div class="dropdown-menu">
                    <a href="#" class="dropdown-item">Reply</a>
                    <a href="#" class="dropdown-item">Forward</a>
                    <a href="#" class="dropdown-item">Copy</a>
                    <a href="#" class="dropdown-item">Starred</a>
                    <a href="#" class="dropdown-item example-delete-message">Delete</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="message-item out">
              <div class="message-avatar">
                <figure class="avatar avatar-sm">
                  <img src="dist\media\img\avatar9.jpg" class="rounded-circle" alt="image" />
                </figure>
                <div>
                  <h5>Matteo Reedy</h5>
                  <div class="time">
                    07:45 AM
                    <i class="mdi mdi-check-all text-info ml-1"></i>
                  </div>
                </div>
              </div>
              <div class="message-content">
                <div>
                  <div class="message-content-images">
                    <a href="dist\media\img\image1.jpg" data-fancybox="images">
                      <img src="dist\media\img\image1.jpg" alt="image" />
                    </a>
                    <a href="dist\media\img\image2.jpg" data-fancybox="images">
                      <img src="dist\media\img\image2.jpg" alt="image" />
                    </a>
                    <a href="dist\media\img\image3.jpg" data-fancybox="images">
                      <img src="dist\media\img\image3.jpg" alt="image" />
                    </a>
                  </div>
                </div>
                <div class="dropdown">
                  <a href="#" data-toggle="dropdown">
                    <i class="mdi mdi-dots-horizontal"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a href="#" class="dropdown-item">Reply</a>
                    <a href="#" class="dropdown-item">Forward</a>
                    <a href="#" class="dropdown-item">Copy</a>
                    <a href="#" class="dropdown-item">Starred</a>
                    <a href="#" class="dropdown-item example-delete-message">Delete</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="message-item in">
              <div class="message-avatar">
                <figure class="avatar avatar-sm">
                  <img src="dist\media\img\avatar6.jpg" class="rounded-circle" alt="image" />
                </figure>
                <div>
                  <h5>Maribel Mallon</h5>
                  <div class="time">08:00 AM</div>
                </div>
              </div>
              <div class="message-content">
                <div class="message-text">I thank you. We are glad to help you. 😃</div>
                <div class="dropdown">
                  <a href="#" data-toggle="dropdown">
                    <i class="mdi mdi-dots-horizontal"></i>
                  </a>
                  <div class="dropdown-menu">
                    <a href="#" class="dropdown-item">Reply</a>
                    <a href="#" class="dropdown-item">Forward</a>
                    <a href="#" class="dropdown-item">Copy</a>
                    <a href="#" class="dropdown-item">Starred</a>
                    <a href="#" class="dropdown-item example-delete-message">Delete</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="message-item out">
              <div class="message-avatar">
                <figure class="avatar avatar-sm">
                  <img src="dist\media\img\avatar9.jpg" class="rounded-circle" alt="image" />
                </figure>
                <div>
                  <h5>Matteo Reedy</h5>
                  <div class="time">
                    09:23 AM
                    <i class="mdi mdi-check-all text-info ml-1"></i>
                  </div>
                </div>
              </div>
              <div class="message-content">
                <div class="message-text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. A,
                  exercitationem inventore
                  quaerat quos repellendus sunt? Assumenda dolor earum optio quis?
                </div>
                <div class="dropdown">
                  <a href="#" data-toggle="dropdown">
                    <i class="mdi mdi-dots-horizontal"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a href="#" class="dropdown-item">Reply</a>
                    <a href="#" class="dropdown-item">Forward</a>
                    <a href="#" class="dropdown-item">Copy</a>
                    <a href="#" class="dropdown-item">Starred</a>
                    <a href="#" class="dropdown-item example-delete-message">Delete</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="message-item out">
              <div class="message-content">
                <div class="message-text">😃 😃 ❤ ❤</div>
                <div class="dropdown">
                  <a href="#" data-toggle="dropdown">
                    <i class="mdi mdi-dots-horizontal"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a href="#" class="dropdown-item">Reply</a>
                    <a href="#" class="dropdown-item">Forward</a>
                    <a href="#" class="dropdown-item">Copy</a>
                    <a href="#" class="dropdown-item">Starred</a>
                    <a href="#" class="dropdown-item example-delete-message">Delete</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="message-item in">
              <div class="message-avatar">
                <figure class="avatar avatar-sm">
                  <img src="dist\media\img\avatar6.jpg" class="rounded-circle" alt="image" />
                </figure>
                <div>
                  <h5>Maribel Mallon</h5>
                  <div class="time">08:00 AM</div>
                </div>
              </div>
              <div class="message-content">
                <div class="video-block">
                  <a
                    data-fancybox
                    href="watch.html?v=c5nhWy7Zoxg&list=PLmUBwxvdqHq-2La24tH5J55DwBdUwZnoI&ab_channel=FrameStockFootages"
                  >
                    <i class="mdi mdi-play-circle-outline"></i>
                  </a>
                </div>
                <div class="dropdown">
                  <a href="#" data-toggle="dropdown">
                    <i class="mdi mdi-dots-horizontal"></i>
                  </a>
                  <div class="dropdown-menu">
                    <a href="#" class="dropdown-item">Reply</a>
                    <a href="#" class="dropdown-item">Forward</a>
                    <a href="#" class="dropdown-item">Copy</a>
                    <a href="#" class="dropdown-item">Starred</a>
                    <a href="#" class="dropdown-item example-delete-message">Delete</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="message-item messages-divider" data-label="1 message unread"></div>
            <div class="message-item in">
              <div class="message-avatar">
                <figure class="avatar avatar-sm">
                  <img src="dist\media\img\avatar6.jpg" class="rounded-circle" alt="image" />
                </figure>
                <div>
                  <h5>Maribel Mallon</h5>
                  <div class="time">11:05 AM</div>
                </div>
              </div>
              <div class="message-content">
                <div class="message-text">I sent you all the files. Good luck with 😃</div>
                <div class="dropdown">
                  <a href="#" data-toggle="dropdown">
                    <i class="mdi mdi-dots-horizontal"></i>
                  </a>
                  <div class="dropdown-menu">
                    <a href="#" class="dropdown-item">Reply</a>
                    <a href="#" class="dropdown-item">Forward</a>
                    <a href="#" class="dropdown-item">Copy</a>
                    <a href="#" class="dropdown-item">Starred</a>
                    <a href="#" class="dropdown-item example-delete-message">Delete</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="message-item in in-typing">
              <div class="message-content">
                <div class="message-text">
                  <div class="writing-animation">
                    <div class="writing-animation-line"></div>
                    <div class="writing-animation-line"></div>
                    <div class="writing-animation-line"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="chat-footer" data-intro-js="6">
          <form class="d-flex">
            <div class="dropdown">
              <button
                class="btn btn-light-info btn-floating mr-3"
                data-toggle="dropdown"
                title="Emoji"
                type="button"
              >
                <i class="mdi mdi-face"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-big p-0">
                <div class="dropdown-menu-search">
                  <input type="text" class="form-control" placeholder="Search emoji" />
                </div>
                <div class="emojis chat-emojis">
                  <ul>
                    <li>😁</li>
                    <li>😂</li>
                    <li>😃</li>
                    <li>😄</li>
                    <li>😅</li>
                    <li>😆</li>
                    <li>😉</li>
                    <li>😊</li>
                    <li>😋</li>
                    <li>😌</li>
                    <li>😍</li>
                    <li>😏</li>
                    <li>😒</li>
                    <li>😓</li>
                    <li>😔</li>
                    <li>😖</li>
                    <li>😘</li>
                    <li>😝</li>
                    <li>😠</li>
                    <li>😢</li>
                    <li>🙅</li>
                    <li>🙆</li>
                    <li>🙇</li>
                    <li>🙈</li>
                    <li>🙉</li>
                    <li>🙊</li>
                    <li>🙋</li>
                    <li>🙌</li>
                    <li>🙍</li>
                    <li>🙎</li>
                    <li>🙏</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="dropdown">
              <button
                class="btn btn-light-info btn-floating mr-3"
                data-toggle="dropdown"
                title="Emoji"
                type="button"
              >
                <i class="mdi mdi-plus"></i>
              </button>
              <div class="dropdown-menu">
                <a href="#" class="dropdown-item">Location</a>
                <a href="#" class="dropdown-item">Attach</a>
                <a href="#" class="dropdown-item">Document</a>
                <a href="#" class="dropdown-item">File</a>
                <a href="#" class="dropdown-item">Video</a>
              </div>
            </div>
            <input
              type="text"
              class="form-control form-control-main"
              placeholder="Write a message."
            />
            <div>
              <button class="btn btn-primary ml-2 btn-floating" type="submit">
                <i class="mdi mdi-send"></i>
              </button>
            </div>
          </form>
        </div>
      </div>
      <!-- ./ chat -->
    </div>
    <!-- ./ layout -->

    <!-- Notifications -->
    <div class="right-sidebar" id="notifications">
      <div class="right-sidebar-header">
        <span class="right-sidebar-title">Notifications</span>
        <a data-right-sidebar="settings" title="Settings" href="#">
          <i class="mdi mdi-cog"></i>
        </a>
        <a href="#" class="right-sidebar-close">
          <i class="mdi mdi-close"></i>
        </a>
      </div>
      <div class="right-sidebar-content">
        <ul class="list-group list-group-flush">
          <li class="list-group-item py-3 px-0 d-flex justify-content-between">
            <div class="d-flex">
              <figure class="avatar avatar-state-warning mr-3">
                <span class="avatar-title bg-info-bright text-info rounded-circle">
                  <i class="mdi mdi-server"></i>
                </span>
              </figure>
              <div>
                <div>You joined a group</div>
                <span class="text-muted small">
                  <i class="mdi mdi-clock-outline small mr-1"></i> Today
                </span>
              </div>
            </div>
            <div class="dropdown">
              <a href="#" data-toggle="dropdown">
                <i class="mdi mdi-dots-horizontal"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <a href="#" class="dropdown-item">Unread</a>
                <a href="#" class="dropdown-item">Detail</a>
                <a href="#" class="dropdown-item">Delete</a>
              </div>
            </div>
          </li>
          <li class="list-group-item py-3 px-0 d-flex justify-content-between">
            <div class="d-flex">
              <figure class="avatar avatar-state-warning mr-3">
                <span class="avatar-title bg-warning-bright text-warning rounded-circle">
                  <i class="mdi mdi-server"></i>
                </span>
              </figure>
              <div>
                <div>Storage is running low!</div>
                <span class="text-muted small">
                  <i class="mdi mdi-clock-outline small mr-1"></i> Today
                </span>
              </div>
            </div>
            <div class="dropdown">
              <a href="#" data-toggle="dropdown">
                <i class="mdi mdi-dots-horizontal"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <a href="#" class="dropdown-item">Unread</a>
                <a href="#" class="dropdown-item">Detail</a>
                <a href="#" class="dropdown-item">Delete</a>
              </div>
            </div>
          </li>
          <li class="list-group-item py-3 px-0 d-flex justify-content-between">
            <div class="d-flex">
              <figure class="avatar mr-3">
                <span class="avatar-title bg-secondary-bright text-secondary rounded-circle">
                  <i class="mdi mdi-file-document-outline"></i>
                </span>
              </figure>
              <div>
                <div>1 person sent a file</div>
                <span class="text-muted small">
                  <i class="mdi mdi-clock-outline small mr-1"></i> 50 min ago
                </span>
              </div>
            </div>
            <div class="dropdown">
              <a href="#" data-toggle="dropdown">
                <i class="mdi mdi-dots-horizontal"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <a href="#" class="dropdown-item">Unread</a>
                <a href="#" class="dropdown-item">Detail</a>
                <a href="#" class="dropdown-item">Delete</a>
              </div>
            </div>
          </li>
          <li class="list-group-item py-3 px-0 d-flex justify-content-between">
            <div class="d-flex">
              <figure class="avatar mr-3">
                <span class="avatar-title bg-success-bright text-success rounded-circle">
                  <i class="mdi mdi-download"></i>
                </span>
              </figure>
              <div>
                <div>Reports ready to download</div>
                <span class="text-muted small">
                  <i class="mdi mdi-clock-outline small mr-1"></i> 5 hour ago
                </span>
              </div>
            </div>
            <div class="dropdown">
              <a href="#" data-toggle="dropdown">
                <i class="mdi mdi-dots-horizontal"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <a href="#" class="dropdown-item">Unread</a>
                <a href="#" class="dropdown-item">Detail</a>
                <a href="#" class="dropdown-item">Delete</a>
              </div>
            </div>
          </li>
          <li class="list-group-item py-3 px-0 d-flex justify-content-between">
            <div class="d-flex">
              <figure class="avatar mr-3">
                <span class="avatar-title bg-info-bright text-info rounded-circle">
                  <i class="mdi mdi-lock"></i>
                </span>
              </figure>
              <div>
                <div>2 steps verification</div>
                <span class="text-muted small">
                  <i class="mdi mdi-clock-outline small mr-1"></i> Yesterday
                </span>
              </div>
            </div>
            <div class="dropdown">
              <a href="#" data-toggle="dropdown">
                <i class="mdi mdi-dots-horizontal"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <a href="#" class="dropdown-item">Unread</a>
                <a href="#" class="dropdown-item">Detail</a>
                <a href="#" class="dropdown-item">Delete</a>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <!-- ./ Notifications -->

    <!-- User profile -->
    <div class="right-sidebar" id="user-profile">
      <div class="right-sidebar-header with-tab-menu">
        <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
          <li class="nav-item">
            <a
              class="nav-link active"
              id="home-tab"
              data-toggle="tab"
              href="#home"
              role="tab"
              aria-controls="home"
              aria-selected="true"
            >About</a>
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              id="profile-tab"
              data-toggle="tab"
              href="#profile"
              role="tab"
              aria-controls="profile"
              aria-selected="false"
            >Media</a>
          </li>
        </ul>
        <a href="#" class="right-sidebar-close">
          <i class="mdi mdi-window-close"></i>
        </a>
      </div>
      <div class="right-sidebar-content">
        <div class="tab-content" id="myTabContent">
          <div
            class="tab-pane fade show active"
            id="home"
            role="tabpanel"
            aria-labelledby="home-tab"
          >
            <div class="text-center mb-4">
              <figure class="avatar avatar-xl mb-4">
                <img src="dist\media\img\avatar9.jpg" class="rounded-circle" alt="image" />
              </figure>
              <h5 class="mb-1">Matteo Reedy</h5>
              <small class="text-muted font-italic">Last seen: Today</small>
            </div>
            <p class="text-muted">
              Lorem ipsum is a pseudo-Latin text used in web design, typography,
              layout, and printing in place of English to emphasise design elements over content.
              It's also called placeholder (or filler) text. It's a convenient tool for
              mock-ups.
            </p>
            <div class="mt-4 mb-4">
              <h6>Phone</h6>
              <p class="text-muted">(555) 555 55 55</p>
            </div>
            <div class="mt-4 mb-4">
              <h6>City</h6>
              <p class="text-muted">Germany / Berlin</p>
            </div>
            <div class="mt-4 mb-4">
              <h6>Website</h6>
              <p>
                <a href="#">www.franshanscombe.com</a>
              </p>
            </div>
            <div class="mt-4 mb-4">
              <h6 class="mb-3">Social media accounts</h6>
              <ul class="list-inline social-links">
                <li class="list-inline-item">
                  <a
                    href="#"
                    class="btn btn-floating btn-facebook"
                    data-toggle="tooltip"
                    title="Facebook"
                  >
                    <i class="mdi mdi-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a
                    href="#"
                    class="btn btn-floating btn-twitter"
                    data-toggle="tooltip"
                    title="Twitter"
                  >
                    <i class="mdi mdi-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a
                    href="#"
                    class="btn btn-floating btn-instagram"
                    data-toggle="tooltip"
                    title="Instagram"
                  >
                    <i class="mdi mdi-instagram"></i>
                  </a>
                </li>
              </ul>
            </div>
            <div class="mt-4 mb-4">
              <h6 class="mb-3">Settings</h6>
              <div class="form-group">
                <div class="form-item custom-control custom-switch">
                  <input type="checkbox" class="custom-control-input" id="customSwitch11" />
                  <label class="custom-control-label" for="customSwitch11">Block</label>
                </div>
              </div>
              <div class="form-group">
                <div class="form-item custom-control custom-switch">
                  <input type="checkbox" class="custom-control-input" checked id="customSwitch12" />
                  <label class="custom-control-label" for="customSwitch12">Mute</label>
                </div>
              </div>
              <div class="form-group">
                <div class="form-item custom-control custom-switch">
                  <input type="checkbox" class="custom-control-input" id="customSwitch13" />
                  <label class="custom-control-label" for="customSwitch13">
                    Get
                    notification
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item py-3 px-0 d-flex justify-content-between">
                  <div>
                    <figure class="avatar avatar-sm mr-2">
                      <span class="avatar-title bg-danger rounded-circle">
                        <i class="mdi mdi-file-pdf-box-outline"></i>
                      </span>
                    </figure>report4221.pdf
                  </div>
                  <div class="dropdown">
                    <a href="#" data-toggle="dropdown">
                      <i class="mdi mdi-dots-horizontal"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a href="#" class="dropdown-item">Forward</a>
                      <a href="#" class="dropdown-item">Download</a>
                      <a href="#" class="dropdown-item">Delete</a>
                    </div>
                  </div>
                </li>
                <li class="list-group-item py-3 px-0 d-flex justify-content-between">
                  <div>
                    <figure class="avatar avatar-sm mr-2">
                      <span class="avatar-title bg-secondary rounded-circle">
                        <i class="mdi mdi-image"></i>
                      </span>
                    </figure>avatar_image.png
                  </div>
                  <div class="dropdown">
                    <a href="#" data-toggle="dropdown">
                      <i class="mdi mdi-dots-horizontal"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a href="#" class="dropdown-item">Forward</a>
                      <a href="#" class="dropdown-item">Download</a>
                      <a href="#" class="dropdown-item">Delete</a>
                    </div>
                  </div>
                </li>
                <li class="list-group-item py-3 px-0 d-flex justify-content-between">
                  <div>
                    <figure class="avatar avatar-sm mr-2">
                      <span class="avatar-title bg-success rounded-circle">
                        <i class="mdi mdi-file-excel-box-outline"></i>
                      </span>
                    </figure>excel_report_file2020.xlsx
                  </div>
                  <div class="dropdown">
                    <a href="#" data-toggle="dropdown">
                      <i class="mdi mdi-dots-horizontal"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a href="#" class="dropdown-item">Forward</a>
                      <a href="#" class="dropdown-item">Download</a>
                      <a href="#" class="dropdown-item">Delete</a>
                    </div>
                  </div>
                </li>
                <li class="list-group-item py-3 px-0 d-flex justify-content-between">
                  <div>
                    <figure class="avatar avatar-sm mr-2">
                      <span class="avatar-title bg-info rounded-circle">
                        <i class="mdi mdi-file-document-outline"></i>
                      </span>
                    </figure>articles342133.txt
                  </div>
                  <div class="dropdown">
                    <a href="#" data-toggle="dropdown">
                      <i class="mdi mdi-dots-horizontal"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a href="#" class="dropdown-item">Forward</a>
                      <a href="#" class="dropdown-item">Download</a>
                      <a href="#" class="dropdown-item">Delete</a>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ./ User profile -->

    <!-- Settings -->
    <div class="right-sidebar" id="settings">
      <div class="right-sidebar-header">
        <span class="right-sidebar-title">Settings</span>
        <a href="#" class="right-sidebar-close">
          <i class="mdi mdi-window-close"></i>
        </a>
      </div>
      <div class="right-sidebar-content">
        <ul class="list-group list-group-flush">
          <li class="list-group-item py-3 px-0">
            <div class="form-item custom-control custom-switch">
              <input type="checkbox" class="custom-control-input" checked id="customSwitch14" />
              <label class="custom-control-label" for="customSwitch14">Allow connected contacts</label>
            </div>
          </li>
          <li class="list-group-item py-3 px-0">
            <div class="form-item custom-control custom-switch">
              <input type="checkbox" class="custom-control-input" checked id="customSwitch15" />
              <label class="custom-control-label" for="customSwitch15">Confirm message requests</label>
            </div>
          </li>
          <li class="list-group-item py-3 px-0">
            <div class="form-item custom-control custom-switch">
              <input type="checkbox" class="custom-control-input" checked id="customSwitch16" />
              <label class="custom-control-label" for="customSwitch16">Profile privacy</label>
            </div>
          </li>
          <li class="list-group-item py-3 px-0">
            <div class="form-item custom-control custom-switch">
              <input type="checkbox" class="custom-control-input" id="customSwitch17" />
              <label class="custom-control-label" for="customSwitch17">Developer mode options</label>
            </div>
          </li>
          <li class="list-group-item py-3 px-0">
            <div class="form-item custom-control custom-switch">
              <input type="checkbox" class="custom-control-input" checked id="customSwitch18" />
              <label class="custom-control-label" for="customSwitch18">
                Two-step security
                verification
              </label>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <!-- ./ Settings -->

    <!-- disconnected modal -->
    <div class="modal fade" id="disconnected" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-zoom" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="row mb-5">
              <div class="col-md-6 offset-3">
                <img src="dist\media\svg\undraw_warning_cyit.svg" class="img-fluid" alt="image" />
              </div>
            </div>
            <p class="lead text-center">Application disconnected</p>
          </div>
          <div class="modal-footer justify-content-center">
            <button type="button" class="btn btn-primary">Reconnect</button>
            <a href="login.html" class="btn btn-link">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- ./ disconnected modal -->

    <!-- voice call modal -->
    <div class="modal fade" id="voiceCallRequest" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-zoom" role="document">
        <div class="modal-content call-request">
          <div class="modal-body">
            <figure class="avatar avatar-xl">
              <img src="dist\media\img\avatar4.jpg" class="rounded-circle" alt="image" />
            </figure>
            <h4 class="my-4">
              Brietta Blogg
              <span class="text-success">calling...</span>
            </h4>
            <div class="call-action-button">
              <button type="button" class="btn btn-danger btn-floating btn-lg" data-dismiss="modal">
                <i class="mdi mdi-phone-cancel"></i>
              </button>
              <button
                type="button"
                class="btn btn-success btn-pulse btn-floating btn-lg voice-call-accept"
              >
                <i class="mdi mdi-phone-check"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ./ voice call modal -->

    <!-- voice call modal -->
    <div
      class="modal voice-call fade"
      id="voiceCall"
      tabindex="-1"
      role="dialog"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered modal-dialog-zoom" role="document">
        <div class="modal-content">
          <div class="modal-body" style="background: url(dist/media/img/avatar2.jpg)">
            <figure class="avatar mb-4 avatar-state-success avatar-xl">
              <img src="dist\media\img\avatar2.jpg" class="rounded-circle" alt="image" />
            </figure>
            <div class="mb-2 font-weight-bold lead">Brietta Blogg</div>
            <div class="mb-4 chat-stopwatch">00:00:00</div>
            <div class="call-action-button">
              <button
                type="button"
                class="btn btn-pulse btn-floating btn-lg mute-event"
                data-toggle="tooltip"
                title="Turn on / off sound"
              >
                <i data-feather="volume-2"></i>
              </button>
              <button
                type="button"
                class="btn btn-danger btn-floating btn-lg"
                data-toggle="tooltip"
                title="Stop talking"
                data-dismiss="modal"
              >
                <i class="mdi mdi-close"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ./ voice call modal -->

    <!-- voice call modal -->
    <div class="modal fade" id="videoCallRequest" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-zoom" role="document">
        <div class="modal-content call-request">
          <div class="modal-body">
            <figure class="avatar avatar-xl">
              <img src="dist\media\img\avatar2.jpg" class="rounded-circle" alt="image" />
            </figure>
            <h4 class="my-4">
              Brietta Blogg
              <span class="text-success">calling...</span>
            </h4>
            <div class="call-action-button">
              <button type="button" class="btn btn-danger btn-floating btn-lg" data-dismiss="modal">
                <i class="mdi mdi-video-minus-outline"></i>
              </button>
              <button
                type="button"
                class="btn btn-success btn-pulse btn-floating btn-lg video-call-request-accept"
              >
                <i class="mdi mdi-video-check-outline"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ./ voice call modal -->

    <!-- video call modal -->
    <div class="modal call fade" id="videoCall" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-zoom" role="document">
        <div class="modal-content">
          <div class="modal-body" style="background: url(dist/media/img/video-call.jpg)">
            <div class="call-time chat-stopwatch">00:00:00</div>
            <div class="call-action">
              <div class="call-action-button">
                <button
                  type="button"
                  class="btn btn-pulse btn-floating btn-lg mute-event"
                  data-toggle="tooltip"
                  data-placement="right"
                  title="Turn on / off sound"
                >
                  <i data-feather="volume-2"></i>
                </button>
                <button
                  type="button"
                  class="btn btn-danger btn-floating btn-lg"
                  data-toggle="tooltip"
                  data-placement="right"
                  title="Stop talking"
                  data-dismiss="modal"
                >
                  <i class="mdi mdi-close"></i>
                </button>
              </div>
              <div class="call-users">
                <figure
                  class="avatar"
                  data-toggle="tooltip"
                  data-placement="left"
                  title="Margaretta Worvell"
                >
                  <img src="dist\media\img\avatar2.jpg" class="rounded-circle" alt="image" />
                </figure>
                <figure
                  class="avatar"
                  data-toggle="tooltip"
                  data-placement="left"
                  title="Matteo Reedy"
                >
                  <span class="avatar-title bg-info rounded-circle">M</span>
                </figure>
                <figure
                  class="avatar"
                  data-toggle="tooltip"
                  data-placement="left"
                  title="Townsend Seary"
                >
                  <img src="dist\media\img\avatar1.jpg" class="rounded-circle" alt="image" />
                </figure>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ./ Video call modal -->

    <!-- add friends modal -->
    <div class="modal fade" id="intiveUsers" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-zoom" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">
              <i class="mdi mdi-account-plus-outline"></i> Invite users
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <i class="mdi mdi-close"></i>
            </button>
          </div>
          <div class="modal-body">
            <form class="mb-4">
              <div class="form-group">
                <label for="invite_emails" class="col-form-label">Email address</label>
                <div class="input-group mb-3">
                  <input
                    type="text"
                    class="form-control"
                    id="invite_emails"
                    placeholder="Email address"
                  />
                  <div class="input-group-append">
                    <button type="button" class="btn btn-success">
                      <i class="mdi mdi-plus"></i>
                    </button>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="invite_topic" class="col-form-label">Invitation topic</label>
                <input type="text" class="form-control" id="invite_topic" placeholder="Topic" />
              </div>
            </form>
            <div class="d-flex justify-content-between">
              <span>Users</span>
              <span class="text-muted small">Total 3 users</span>
            </div>
            <hr />
            <div>
              <ul class="list-group list-group-unlined">
                <li class="list-group-item px-0 d-flex">
                  <figure class="avatar mr-3">
                    <img src="dist\media\img\avatar4.jpg" class="rounded-circle" alt="image" />
                  </figure>
                  <div>
                    <div>Amanda Harvey</div>
                    <div class="small text-muted">amanda@example.com</div>
                  </div>
                  <a class="text-danger ml-auto" data-toggle="tooltip" title="Delete" href="#">
                    <i class="mdi mdi-delete-outline"></i>
                  </a>
                </li>
                <li class="list-group-item px-0 d-flex">
                  <figure class="avatar mr-3">
                    <span class="avatar-title bg-info rounded-circle">D</span>
                  </figure>
                  <div>
                    <div>David Harrison</div>
                    <div class="small text-muted">david@example.com</div>
                  </div>
                  <a class="text-danger ml-auto" data-toggle="tooltip" title="Delete" href="#">
                    <i class="mdi mdi-delete-outline"></i>
                  </a>
                </li>
                <li class="list-group-item px-0 d-flex">
                  <figure class="avatar mr-3">
                    <img src="dist\media\img\avatar10.jpg" class="rounded-circle" alt="image" />
                  </figure>
                  <div>
                    <div>Ella Lauda</div>
                    <div class="small text-muted">Markvt@example.com</div>
                  </div>
                  <a class="text-danger ml-auto" data-toggle="tooltip" title="Delete" href="#">
                    <i class="mdi mdi-delete-outline"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </div>
    </div>
    <!-- ./ add friends modal -->

    <!-- new group modal -->
    <div class="modal fade" id="newGroup" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-zoom" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">
              <i class="mdi mdi-account-group-outline mr-2"></i> New Group
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <i class="mdi mdi-close"></i>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="group_name" class="col-form-label">Group name</label>
                <div class="input-group">
                  <input type="text" class="form-control" id="group_name" />
                  <div class="input-group-append">
                    <button
                      class="btn btn-success"
                      data-toggle="dropdown"
                      title="Emoji"
                      type="button"
                    >
                      <i class="mdi mdi-face"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-big dropdown-menu-right p-0">
                      <div class="dropdown-menu-search">
                        <input type="text" class="form-control" placeholder="Search emoji" />
                      </div>
                      <div class="emojis chat-emojis">
                        <ul>
                          <li>😁</li>
                          <li>😂</li>
                          <li>😃</li>
                          <li>😄</li>
                          <li>😅</li>
                          <li>😆</li>
                          <li>😉</li>
                          <li>😊</li>
                          <li>😋</li>
                          <li>😌</li>
                          <li>😍</li>
                          <li>😏</li>
                          <li>😒</li>
                          <li>😓</li>
                          <li>😔</li>
                          <li>😖</li>
                          <li>😘</li>
                          <li>😝</li>
                          <li>😠</li>
                          <li>😢</li>
                          <li>🙅</li>
                          <li>🙆</li>
                          <li>🙇</li>
                          <li>🙈</li>
                          <li>🙉</li>
                          <li>🙊</li>
                          <li>🙋</li>
                          <li>🙌</li>
                          <li>🙍</li>
                          <li>🙎</li>
                          <li>🙏</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <p class="mb-2">The group members</p>
              <div class="form-group">
                <div class="avatar-group">
                  <figure class="avatar" data-toggle="tooltip" title="Tobit Spraging">
                    <span class="avatar-title bg-success rounded-circle">T</span>
                  </figure>
                  <figure class="avatar" data-toggle="tooltip" title="Cloe Jeayes">
                    <img src="dist\media\img\avatar8.jpg" class="rounded-circle" alt="image" />
                  </figure>
                  <figure class="avatar" data-toggle="tooltip" title="Marlee Perazzo">
                    <span class="avatar-title bg-warning rounded-circle">M</span>
                  </figure>
                  <figure class="avatar" data-toggle="tooltip" title="Stafford Pioch">
                    <img src="dist\media\img\avatar1.jpg" class="rounded-circle" alt="image" />
                  </figure>
                  <figure class="avatar" data-toggle="tooltip" title="Bethena Langsdon">
                    <span class="avatar-title bg-info rounded-circle">B</span>
                  </figure>
                </div>
                <button
                  type="button"
                  class="btn btn-light"
                  title="Add User"
                  data-toggle="dropdown"
                >Add new user</button>
                <div class="dropdown-menu p-0">
                  <div class="dropdown-menu-search">
                    <input type="text" class="form-control" placeholder="Search users" />
                  </div>
                  <div class="px-3 pb-3">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item d-flex align-items-center px-0">
                        <div class="mr-2">
                          <figure class="avatar avatar-sm">
                            <span class="avatar-title bg-info rounded-circle">V</span>
                          </figure>
                        </div>
                        <div>Valentine Maton</div>
                        <button type="button" class="btn ml-auto text-primary">Add</button>
                      </li>
                      <li class="list-group-item d-flex align-items-center px-0">
                        <div class="mr-2">
                          <figure class="avatar avatar-sm">
                            <img
                              src="dist\media\img\avatar1.jpg"
                              class="rounded-circle"
                              alt="image"
                            />
                          </figure>
                        </div>
                        <div>Forest Kroch</div>
                        <button type="button" class="btn ml-auto text-primary">Add</button>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="description" class="col-form-label">Description</label>
                <textarea class="form-control" id="description"></textarea>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary">Create Group</button>
          </div>
        </div>
      </div>
    </div>
    <!-- ./ new group modal -->

    <!-- setting modal -->
    <div class="modal fade" id="settingsModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-zoom" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">
              <i class="mdi mdi-cog mr-2"></i> Settings
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <i class="mdi mdi-close"></i>
            </button>
          </div>
          <div class="modal-body">
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item">
                <a
                  class="nav-link active"
                  data-toggle="tab"
                  href="#account"
                  role="tab"
                  aria-controls="account"
                  aria-selected="true"
                >Account</a>
              </li>
              <li class="nav-item">
                <a
                  class="nav-link"
                  data-toggle="tab"
                  href="#notification"
                  role="tab"
                  aria-controls="notification"
                  aria-selected="false"
                >Notification</a>
              </li>
              <li class="nav-item">
                <a
                  class="nav-link"
                  data-toggle="tab"
                  href="#contact"
                  role="tab"
                  aria-controls="contact"
                  aria-selected="false"
                >Security</a>
              </li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane show active" id="account" role="tabpanel">
                <div class="form-item custom-control custom-switch">
                  <input type="checkbox" class="custom-control-input" checked id="customSwitch1" />
                  <label class="custom-control-label" for="customSwitch1">Allow connected contacts</label>
                </div>
                <div class="form-item custom-control custom-switch">
                  <input type="checkbox" class="custom-control-input" checked id="customSwitch2" />
                  <label class="custom-control-label" for="customSwitch2">Confirm message requests</label>
                </div>
                <div class="form-item custom-control custom-switch">
                  <input type="checkbox" class="custom-control-input" checked id="customSwitch3" />
                  <label class="custom-control-label" for="customSwitch3">Profile privacy</label>
                </div>
                <div class="form-item custom-control custom-switch">
                  <input type="checkbox" class="custom-control-input" id="customSwitch4" />
                  <label class="custom-control-label" for="customSwitch4">Developer mode options</label>
                </div>
                <div class="form-item custom-control custom-switch">
                  <input type="checkbox" class="custom-control-input" checked id="customSwitch5" />
                  <label class="custom-control-label" for="customSwitch5">
                    Two-step security
                    verification
                  </label>
                </div>
              </div>
              <div class="tab-pane" id="notification" role="tabpanel">
                <div class="form-item custom-control custom-switch">
                  <input type="checkbox" class="custom-control-input" checked id="customSwitch6" />
                  <label class="custom-control-label" for="customSwitch6">Allow mobile notifications</label>
                </div>
                <div class="form-item custom-control custom-switch">
                  <input type="checkbox" class="custom-control-input" id="customSwitch7" />
                  <label class="custom-control-label" for="customSwitch7">
                    Notifications from your
                    friends
                  </label>
                </div>
                <div class="form-item custom-control custom-switch">
                  <input type="checkbox" class="custom-control-input" id="customSwitch8" />
                  <label
                    class="custom-control-label"
                    for="customSwitch8"
                  >Send notifications by email</label>
                </div>
              </div>
              <div class="tab-pane" id="contact" role="tabpanel">
                <div class="form-item custom-control custom-switch">
                  <input type="checkbox" class="custom-control-input" id="customSwitch9" />
                  <label class="custom-control-label" for="customSwitch9">
                    Suggest changing passwords every
                    month.
                  </label>
                </div>
                <div class="form-item custom-control custom-switch">
                  <input type="checkbox" class="custom-control-input" checked id="customSwitch10" />
                  <label class="custom-control-label" for="customSwitch10">
                    Let me know about suspicious
                    entries to your account
                  </label>
                </div>
                <div class="form-item">
                  <p>
                    <a
                      class="btn btn-light"
                      data-toggle="collapse"
                      href="#collapseExample"
                      role="button"
                      aria-expanded="false"
                      aria-controls="collapseExample"
                    >
                      <i class="mdi mdi-plus mr-2"></i> Security Questions
                    </a>
                  </p>
                  <div class="collapse" id="collapseExample">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Question 1" />
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Answer 1" />
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Question 2" />
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Answer 2" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary">Save</button>
          </div>
        </div>
      </div>
    </div>
    <!-- ./ setting modal -->

    <!-- edit profile modal -->
    <div class="modal fade" id="editProfile" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-zoom" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">
              <i class="mdi mdi-clipboard-edit-outline mr-2"></i> Edit Profile
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <i class="mdi mdi-close"></i>
            </button>
          </div>
          <div class="modal-body">
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item">
                <a
                  class="nav-link active"
                  data-toggle="tab"
                  href="#personal"
                  role="tab"
                  aria-controls="personal"
                  aria-selected="true"
                >Personal</a>
              </li>
              <li class="nav-item">
                <a
                  class="nav-link"
                  data-toggle="tab"
                  href="#about"
                  role="tab"
                  aria-controls="about"
                  aria-selected="false"
                >About</a>
              </li>
              <li class="nav-item">
                <a
                  class="nav-link"
                  data-toggle="tab"
                  href="#social-links"
                  role="tab"
                  aria-controls="social-links"
                  aria-selected="false"
                >Social Links</a>
              </li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane show active" id="personal" role="tabpanel">
                <form>
                  <div class="form-group">
                    <label for="fullname" class="col-form-label">Fullname</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="fullname" />
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-account-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-form-label">Avatar</label>
                    <div class="d-flex align-items-center">
                      <div>
                        <figure class="avatar mr-3 item-rtl">
                          <img src="dist\media\img\avatar4.jpg" class="rounded-circle" alt="image" />
                        </figure>
                      </div>
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile" />
                        <label class="custom-file-label" for="customFile">Choose file</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="city" class="col-form-label">City</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="city" placeholder="Ex: Columbia" />
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-map-marker-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="phone" class="col-form-label">Phone</label>
                    <div class="input-group">
                      <input
                        type="text"
                        class="form-control"
                        id="phone"
                        placeholder="(555) 555 55 55"
                      />
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-phone"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="website" class="col-form-label">Website</label>
                    <input type="text" class="form-control" id="website" placeholder="https://" />
                  </div>
                </form>
              </div>
              <div class="tab-pane" id="about" role="tabpanel">
                <form>
                  <div class="form-group">
                    <label for="about-text" class="col-form-label">
                      Write a few words that describe
                      you
                    </label>
                    <textarea class="form-control" id="about-text"></textarea>
                  </div>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" checked id="customCheck1" />
                    <label class="custom-control-label" for="customCheck1">View profile</label>
                  </div>
                </form>
              </div>
              <div class="tab-pane" id="social-links" role="tabpanel">
                <form>
                  <div class="form-group">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Username" />
                      <div class="input-group-append">
                        <span class="input-group-text bg-facebook">
                          <i class="mdi mdi-facebook"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Username" />
                      <div class="input-group-append">
                        <span class="input-group-text bg-twitter">
                          <i class="mdi mdi-twitter"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Username" />
                      <div class="input-group-append">
                        <span class="input-group-text bg-instagram">
                          <i class="mdi mdi-instagram"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Username" />
                      <div class="input-group-append">
                        <span class="input-group-text bg-linkedin">
                          <i class="mdi mdi-linkedin"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Username" />
                      <div class="input-group-append">
                        <span class="input-group-text bg-youtube">
                          <i class="mdi mdi-youtube"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Username" />
                      <div class="input-group-append">
                        <span class="input-group-text bg-google">
                          <i class="mdi mdi-google"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Username" />
                      <div class="input-group-append">
                        <span class="input-group-text bg-whatsapp">
                          <i class="mdi mdi-whatsapp"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary">Save</button>
          </div>
        </div>
      </div>
    </div>

@endsection
</div>
