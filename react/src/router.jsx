import {createBrowserRouter} from "react-router-dom";
import Signup from "./views/modals/Signup";
import GuestLayout from "./components/GuestLayout";
import Login from "./views/modals/Login";
const router = createBrowserRouter([
	{
		path: '/',
		element: <GuestLayout/>,
		children: [
			{
				path: "/signup",
				element: <Signup />

			}, 
			{
				path: "/login",
				element: <Login />
			}
		]

	}

]);

export default router;