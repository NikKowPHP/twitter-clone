import {createBrowserRouter} from "react-router-dom";
import Signup from "./views/Signup";

const router = createBrowserRouter([
	{
		path: '/',
		element: <Signup />
	}

]);

export default router;