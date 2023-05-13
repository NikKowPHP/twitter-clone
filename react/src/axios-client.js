import axios from "axios";

const axiosClient = axios.create({
	baseURL: `${import.meta.env.VITE_APT_BASE_URL}/api`
})