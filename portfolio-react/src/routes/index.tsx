import { createBrowserRouter, RouterProvider } from "react-router";
import About from "../pages/about/About";
import Contact from "../pages/contact/Contact";
import Home from "../pages/home/Home";
import Menu from "../pages/menu/Menu";
import Projects from "../pages/projects/Projects";

const router = createBrowserRouter([
  {
    path: "/",
    element: <Home />,
  },
  {
    path: "/about",
    element: <About />,
  },
  {
    path: "/contact",
    element: <Contact />,
  },
  {
    path: "/menu",
    element: <Menu />,
  },
  {
    path: "/projects",
    element: <Projects />,
  },
]);

export default function Router() {
  return <RouterProvider router={router} />;
}
